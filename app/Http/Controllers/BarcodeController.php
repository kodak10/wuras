<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Barcode;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Picqer\Barcode\BarcodeGeneratorHTML; 
use Picqer\Barcode\BarcodeGeneratorPNG;

class BarcodeController extends Controller
{
    public function index()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        $store_id = Auth::user()->store_id;

        $articles = Article::with(['categories', 'tags'])
        ->where('store_id', $store_id)
        ->orderBy('created_at', 'desc')  
        ->get();  

       

        return view('backend.pages.codeBarres.index', compact('articles', 'lowStockProducts'));
    }

  
    public function store(Request $request)
    {
        $code = $request->input('code');
        $quantity = $request->input('quantity');
        $productId = $request->input('product_id'); // ID de l'article
        
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
                $product = Article::find($productId); 
            
            if (!$product) {
                return redirect()->back()->withErrors(['Erreur de recherche de l\'article']);
            }

            $barcodeData = [
                'barcode' => $barcode,
                'show_name' => $product->name, // Nom de l'article
                'show_price' => $product->price, // Prix de l'article
                'promotion_type' => $product->promotion_type, // Type de promotion de l'article
                'promotion_value' => $product->promotion_value, // Valeur de la promotion
                'article' => $product, // Objet de l'article complet
                'additional_info' => $additionalInfo, // Informations supplémentaires
            ];

            $barcodes[] = $barcodeData;
        }

        // Charger la vue pour générer le PDF
        $pdf = Pdf::loadView('backend.pages.codeBarres.pdf', compact('code',  'quantity',  'barcodes'));

       // Générer un nom de fichier unique basé sur la date et l'heure
        $fileName = 'code-barres-' . now()->format('Ymd-His') . '.pdf';

        // Télécharger le PDF généré avec un nom unique
        return $pdf->download($fileName);

    }

    private function generateBarcode($code)
    {
        // Créez une instance de BarcodeGeneratorPNG
        $barcodeGenerator = new \Picqer\Barcode\BarcodeGeneratorPNG();
        
        $barcodeImage = $barcodeGenerator->getBarcode($code, \Picqer\Barcode\BarcodeGeneratorPNG::TYPE_CODE_128);
        
        $barcodeDataUrl = 'data:image/png;base64,' . base64_encode($barcodeImage);
        
        return $barcodeDataUrl;
    } 

}
