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
        $quantity = $request->input('quantity');
        $productId = $request->input('product_id'); // ID de l'article
    
        // Récupérer l'article
        $product = Article::find($productId);
    
        if (!$product) {
            return redirect()->back()->withErrors(['Aucun article sélectionné']);
        }
    
        // Générer des codes-barres uniques
        $barcodes = [];
        for ($i = 0; $i < $quantity; $i++) {
            // Générer un code unique (exemple : ID de l'article + timestamp + index)
            $uniqueCode = $productId . '-' . now()->timestamp . '-' . $i;
    
            // Générer le code-barres
            $barcodeImage = $this->generateBarcode($uniqueCode);
    
            // Enregistrer le lien entre le code-barres et l'article
            $barcodeRecord = \App\Models\ArticleBarcode::create([
                'article_id' => $product->id,
                'barcode_path' => $barcodeImage, // Chemin ou URL du code-barres
            ]);
    
            // Ajouter les informations au tableau pour le PDF
            $barcodes[] = [
                'barcode' => $barcodeImage,
                'name' => $product->name, // Nom de l'article actuel
                'price' => $product->price, // Prix de l'article actuel
                'promotion_type' => $product->promotion_type, // Type de promotion actuel
                'promotion_value' => $product->promotion_value, // Valeur de la promotion actuelle
            ];
        }
    
        // Charger la vue pour générer le PDF
        $pdf = Pdf::loadView('backend.pages.codeBarres.pdf', compact('barcodes', 'quantity'));
    
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
