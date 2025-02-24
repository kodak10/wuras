<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Code-Barres</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding-top: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            /* justify-content: space-between; */
            gap: 20px;
        }

        .col {
            width: 20%; /* Trois éléments par ligne */
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .barcode {
            text-align: center;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .barcode img {
            max-width: 100%;
            height: auto;
        }

        .info p {
            margin: 5px 0;
        }

        .info strong {
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .col {
                width: 48%; /* Pour les écrans plus petits */
            }
        }

        @media (max-width: 480px) {
            .col {
                width: 100%; /* Pour les petits écrans, un élément par ligne */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($barcodes as $barcodeData)
                <div class="col">
                    <div class="barcode">
                        <!-- Afficher l'image du code-barres -->
                        <img src="{{ $barcodeData['barcode'] }}" alt="Code-barres">

                        @if($barcodeData['name'])
                            <p><strong>Nom:</strong> {{ $barcodeData['article']->name }}</p> <!-- Afficher le nom de l'article -->
                        @endif
                        
                        @if($barcodeData['price'])
                            <p><strong>Prix:</strong> {{ $barcodeData['article']->price }} FCFA</p> <!-- Afficher le prix de l'article -->
                        @endif
                        
                        @if($barcodeData['promotion_type'] = "fixed")
                            <p><strong>Promotion:</strong> {{ $barcodeData['article']->promotion_value }}</p> <!-- Afficher la promotion de l'article -->
                        @endif
                        
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
