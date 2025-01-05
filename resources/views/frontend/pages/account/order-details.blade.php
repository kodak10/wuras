<!doctype html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facture #{{ $order->order_number }}</title>
    <link rel="stylesheet" href="{{asset('assets/css/pdf.css')}}">
    <style>
        h4 {
    margin: 0;
}
.w-full {
    width: 100%;
}
.w-half {
    width: 50%;
}
.margin-top {
    margin-top: 1.25rem;
}
.footer {
    font-size: 0.875rem;
    padding: 1rem;
    background-color: rgb(241 245 249);
}
table {
    width: 100%;
    border-spacing: 0;
}
table.products {
    font-size: 0.875rem;
}
table.products tr {
    background-color: rgb(96 165 250);
}
table.products th {
    color: #ffffff;
    padding: 0.5rem;
}
table tr.items {
    background-color: rgb(241 245 249);
}
table tr.items td {
    padding: 0.5rem;
}
.total {
    text-align: right;
    margin-top: 1rem;
    font-size: 0.875rem;
}
    </style>
</head>

<body>
    <table class="w-full">
        <tr>
            <td class="w-half">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="200" />
            </td>
            <td class="w-half">
                <h2>Facture #{{ $order->order_number }}</h2>
            </td>
        </tr>
    </table>

    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="">
                    <div><h4>Date :</h4> {{ $order->created_at->format('d/m/Y H:i:s') }}</div>
                </td>
            </tr>
        </table>
    </div>
 
    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="w-half">
                    <div>
                        <h4>De :</h4>
                    </div>
                    <div>Wuras</div>
                    <div>Email</div>
                    <div>+225 0749667007</div>
                    <div>Localisation</div>


                </td>
                <td class="w-half">
                    <div>
                        <h4>À :</h4>
                    </div>
                    <div>{{ $order->user_id ? $order->user->name : 'Utilisateur inconnu' }}</div>
                    <div>{{ $order->user_id ? $order->user->email : 'Email inconnu' }}</div>
                    <div>Numéro de telephone à ajouter</div>
                    <div></div>
                </td>
                
            </tr>
        </table>
    </div>

    
 
    <div class="margin-top ">
        <table class="products table table-striped">
            <tr>
                <th>Nom</th>
                <th>Qté</th>
                <th>Prix</th>
                <th>Total</th>

            </tr>
            @foreach($order->orderDetails as $detail)
                <tr>
                    <td>{{ $detail->article->name }}</td>
                    <td>{{ $detail->quantity }}</td>
                    <td>{{ $detail->article->price }}</td>
                    <td>{{ $detail->article->price * $detail->quantity}}</td>

                </tr>
            @endforeach
        </table>
    </div>
 
    <div class="total">
        <strong>Total : {{ $order->total_price }} FCFA</strong>
    </div>
 
    <div class="footer margin-top">
        <div>Merci pour votre achat!</div>
        <div>&copy; Wuras</div>
    </div>
</body>
</html>

