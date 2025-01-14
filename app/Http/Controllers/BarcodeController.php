<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Barcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Picqer\Barcode\BarcodeGeneratorHTML; // Ajoutez cette ligne pour utiliser le générateur HTML

class BarcodeController extends Controller
{
    public function index()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        $articles = Article::with(['categories', 'tags'])
        ->orderBy('created_at', 'desc')  // Trie les articles par la date de création, du plus récent au plus ancien
        ->get();  // Limite à 10 articles par page

       

        return view('backend.pages.codeBarres.index', compact('articles', 'lowStockProducts'));
    }

  
    public function store(Request $request)
    {
        // Récupérer les données du formulaire
    $code = $request->input('code');
    $quantity = $request->input('quantity');
    $productId = $request->input('product_id'); // ID de l'article
    

    // Récupérer l'article en fonction de son ID
    $product = Article::find($productId);

    if (!$product) {
        // Si l'article n'existe pas, retournez une erreur ou une page avec un message
        return redirect()->back()->withErrors(['Aucun article sélectionné']);
    }


        if (empty($code)) {
            $code = 'DEFAULTCODE'; // Utiliser un code par défaut
        }
        // Générer le code-barres
        $barcode = $this->generateBarcode($code);

        $additionalInfo = $request->input('additional_info', []);

        $barcodes = [];
    for ($i = 0; $i < $quantity; $i++) {
        // Recherche de l'article et récupération des informations
        $product = Article::find($productId); // Rechercher à nouveau l'article (si nécessaire, mais normalement non)
        
        if (!$product) {
            return redirect()->back()->withErrors(['Erreur de recherche de l\'article']);
        }

        // Créer un tableau avec toutes les informations nécessaires pour chaque code-barres
        $barcodeData = [
            'barcode' => $barcode,
            'show_name' => $product->name, // Nom de l'article
            'show_price' => $product->price, // Prix de l'article
            'promotion_type' => $product->promotion_type, // Type de promotion de l'article
            'promotion_value' => $product->promotion_value, // Valeur de la promotion
            'article' => $product, // Objet de l'article complet
            'additional_info' => $additionalInfo, // Informations supplémentaires
        ];

        // Ajouter à la liste des barcodes
        $barcodes[] = $barcodeData;
    }

        // Charger la vue pour générer le PDF
        $pdf = Pdf::loadView('backend.pages.codeBarres.pdf', compact('code',  'quantity',  'barcodes'));

       // Générer un nom de fichier unique basé sur la date et l'heure
        $fileName = 'code-barres-' . now()->format('Ymd-His') . '.pdf';

        // Télécharger le PDF généré avec un nom unique
        return $pdf->download($fileName);

    }

    // Fonction pour générer le code-barres (vous devez avoir un générateur de code-barres installé)
    private function generateBarcode($code)
{
    // Créez une instance de BarcodeGeneratorPNG
    $barcodeGenerator = new \Picqer\Barcode\BarcodeGeneratorPNG();
    
    // Générez l'image du code-barres (ici en format PNG)
    $barcodeImage = $barcodeGenerator->getBarcode($code, \Picqer\Barcode\BarcodeGeneratorPNG::TYPE_CODE_128);
    
    // Vous pouvez soit enregistrer l'image sur le serveur, soit l'envoyer directement au navigateur
    $barcodeDataUrl = 'data:image/png;base64,' . base64_encode($barcodeImage);
    
    return $barcodeDataUrl;
}


   



    

}
