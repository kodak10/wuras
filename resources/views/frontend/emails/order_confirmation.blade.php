<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation de commande</title>
</head>
<body>
    {{-- <p>Hi {{$order->firstname}} {{$order->lastname}}</p> --}}
    <p>Votre commande a été passée avec succès.</p>
    


    <table style="width: 600px; text-align:right">
        <thead>
            <tr>
                <th>Article</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
                <tr>
                    {{-- <td><img src="{{asset('assets/images/products')}}/{{$item->product->image}}" width="100" /></td> --}}
                    <td>{{$item['name']}}</td>
                    <td>{{$item['price']}}</td>
                    <td>{{$item['quantite']}}</td>
                    <td>{{$item['price'] * $item['quantite']}} FCFA</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3" style="border-top:1px solid #ccc;"></td>
                <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc;">Sous-total : {{$order->total_price}} FCFA</td>
                {{-- <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc;">Subtotal : ${{$order->subtotal}}</td> --}}
            </tr>
            <tr>
                <td colspan="3"></td>
                <td  style="font-size:15px;font-weight:bold;">Livraison : Au magasin</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size:22px;font-weight:bold;">Total : {{$order->total_price}} FCFA</td>
            </tr>
        </tbody>
    </table>  
    
    <a href="{{ route('order.downloadReceipt', $order->id) }}" class="btn btn-primary mb-3" style="width:300px; margin:0px auto"><i class="w-icon-download fs-10"></i>
        Télécharger la facture</a>
</body>
</html>