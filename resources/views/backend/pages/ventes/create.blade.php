@extends('backend.layouts.master')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Gestion des Ventes</h1>

    <div class="row">
        <!-- Liste des Produits -->
        <div class="col-md-7">
            <h3>Produits Disponibles</h3>
            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


            <div class="table-responsive">

                <table id="lang_file" class="table w-100 table-striped table-bordered display ">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ number_format($product->price, 2) }} FCFA</td>
                            <td>
                                <button 
                                    class="btn btn-primary btn-sm add-to-cart" 
                                    data-id="{{ $product->id }}" 
                                    data-name="{{ $product->name }}" 
                                    data-price="{{ $product->price }}">
                                    Ajouter
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- <div class="table-responsive">
                <table id="lang_file" class="table w-100 table-striped table-bordered display ">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                            </th>
                            <th>Catégories</th>
                            <th>Tags</th>
                            <th>Couverture</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Statut</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="{{ $article->id }}" id="flexCheckDefault{{ $article->id }}">
                                    </div>
                                </td>
                                <td>
                                    <ul class="list-unstyled mb-0">
                                        @foreach ($article->categories as $category)
                                            <li>{{ $category->name }}</li>
                                        @endforeach
                                        @if($article->categories->count() > 3)
                                            <li><a href="#">Voir plus...</a></li>
                                        @endif
                                    </ul>
                                </td>

                                <td>
                                    <ul class="list-unstyled mb-0">
                                        @foreach ($article->tags as $tag)
                                            <li>{{ $tag->tag_name }}</li>
                                        @endforeach
                                        @if($article->tags->count() > 3)
                                            <li><a href="#">Voir plus...</a></li>
                                        @endif
                                    </ul>
                                </td>
                                
                                <td>
                                    <div class="d-flex align-items-center m-auto">
                                        <img src="{{ asset('storage/' . $article->couverture) }}" class="rounded-circle" alt="{{ $article->name }}" width="56" height="56">
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $article->name }}</p>
                                </td>

                                <td>
                                    <p class="mb-0">{{ number_format($article->price, 2) }} FCFA</p>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="text-bg-{{ $article->status == 'published' ? 'success' : ($article->status == 'draft' ? 'warning' : 'danger') }} p-1 rounded-circle"></span>
                                        <p class="mb-0 ms-2">
                                            {{ 
                                                [
                                                    'published' => 'Publié',
                                                    'draft' => 'Brouillon',
                                                    'inactive' => 'Inactif'
                                                ][$article->status] ?? 'Inconnu'
                                            }}
                                        </p>
                                    </div>
                                </td>
                                
                                <td>
                                    <h6 class="mb-0 fs-4 {{ $article->quantite <= $article->limit_quantite ? 'text-danger' : '' }}">
                                        {{ $article->quantite }}
                                    </h6>
                                    
                                </td>
                                <td>
                                    <a class="fs-6 text-muted" href="{{ route('admin.articles.edit', $article->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier">
                                        <i class="ti ti-pencil"></i>
                                    </a>

                                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" class="d-inline" id="delete-form-{{ $article->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-link text-danger fs-6 p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Supprimer" onclick="confirmDelete({{ $article->id }})">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                            </th>
                            <th>Catégories</th>
                            <th>Tags</th>
                            <th>Couverture</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Status</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>

                </table>
              
            </div> --}}
        </div>

        <!-- Panier -->
        <div class="col-md-5">
            <h3>Panier</h3>
            <table class="table table-bordered" id="cart-table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Réduction</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Les articles ajoutés au panier s'affichent ici -->
                </tbody>
            </table>

            <h4 class="text-right mt-3">Total avant réduction: <span id="subtotal-price">0</span> FCFA</h4>
            <h4 class="text-right mt-3">Réduction globale: <input type="number" id="discount" class="form-control" min="0" max="100" placeholder="Remise (%)"></h4>
            <h4 class="text-right mt-3">Total après réduction: <span id="total-price">0</span> FCFA</h4>

            <button class="btn btn-success mt-3" id="validate-sale">Valider la Vente</button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let cart = [];
    let subtotal = 0;
    let discountPercentage = 0;

    // Ajouter un produit au panier
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const name = this.dataset.name;
            const price = parseFloat(this.dataset.price);

            // Vérifier si le produit est déjà dans le panier
            const existingProduct = cart.find(item => item.id === id);

            if (existingProduct) {
                existingProduct.quantity++;
                existingProduct.total = existingProduct.quantity * existingProduct.price - existingProduct.discount;
            } else {
                cart.push({
                    id: id,
                    name: name,
                    price: price,
                    quantity: 1,
                    total: price,
                    discount: 0
                });
            }

            updateCartTable();
        });
    });

    // Mettre à jour le tableau du panier
    // Mettre à jour le tableau du panier
function updateCartTable() {
    const tbody = document.querySelector('#cart-table tbody');
    tbody.innerHTML = '';
    subtotal = 0;

    cart.forEach(item => {
        const tr = document.createElement('tr');

        tr.innerHTML = `
            <td>${item.name}</td>
            <td>
                <input type="number" class="form-control quantity" data-id="${item.id}" value="${item.quantity}" min="1">
            </td>
            <td>${item.price.toFixed(2)} FCFA</td>
            <td>
                <input type="number" class="form-control discount" data-id="${item.id}" value="${item.discount}" min="0">
            </td>
            <td>${item.total.toFixed(2)} FCFA</td>
            <td>
                <button class="btn btn-danger btn-sm remove-from-cart" data-id="${item.id}">Supprimer</button>
            </td>
        `;

        tbody.appendChild(tr);
        subtotal += item.total;
    });

    // Mettre à jour les totaux
    document.getElementById('subtotal-price').textContent = subtotal.toFixed(2);
    document.getElementById('total-price').textContent = (subtotal * (1 - discountPercentage / 100)).toFixed(2);

    // Ajouter des événements pour les boutons "Supprimer"
    document.querySelectorAll('.remove-from-cart').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            removeFromCart(id);
        });
    });
}

// Supprimer un produit du panier
function removeFromCart(id) {
    // Filtrer les articles pour retirer l'article correspondant
    cart = cart.filter(item => item.id !== id);
    updateCartTable();
}

// Ajouter une remise globale
document.querySelector('#discount').addEventListener('input', function () {
    discountPercentage = parseFloat(this.value) || 0;
    updateCartTable();
});

// Ajouter des événements pour changer les quantités et les remises individuelles
document.addEventListener('input', function (event) {
    if (event.target.classList.contains('quantity')) {
        const id = event.target.dataset.id;
        const quantity = parseInt(event.target.value, 10) || 1;
        const product = cart.find(item => item.id === id);
        if (product) {
            product.quantity = quantity;
            product.total = product.quantity * product.price - product.discount;
            updateCartTable();
        }
    }

    if (event.target.classList.contains('discount')) {
        const id = event.target.dataset.id;
        const discount = parseFloat(event.target.value) || 0;
        const product = cart.find(item => item.id === id);
        if (product) {
            product.discount = discount;
            product.total = product.quantity * product.price - product.discount;
            updateCartTable();
        }
    }
});


    // Calculer le total après remise
    function updateTotalPrice() {
        let total = subtotal;

        // Calcul de la remise globale sur le panier
        const discountAmount = (discountPercentage / 100) * total;
        total -= discountAmount;

        document.querySelector('#subtotal-price').textContent = subtotal.toFixed(2);
        document.querySelector('#total-price').textContent = total.toFixed(2);
    }

    // Mettre à jour la quantité et la réduction par produit
    document.querySelectorAll('.quantity').forEach(input => {
        input.addEventListener('change', function () {
            const id = this.dataset.id;
            const quantity = parseInt(this.value);

            const product = cart.find(item => item.id === id);
            product.quantity = quantity;
            product.total = product.quantity * product.price - product.discount;

            updateCartTable();
        });
    });

    document.querySelectorAll('.discount').forEach(input => {
        input.addEventListener('input', function () {
            const id = this.dataset.id;
            const discount = parseFloat(this.value);

            const product = cart.find(item => item.id === id);
            product.discount = discount;
            product.total = product.quantity * product.price - product.discount;

            updateCartTable();
        });
    });

    // Supprimer un article du panier
    document.querySelectorAll('.remove-from-cart').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            cart = cart.filter(item => item.id !== id);
            updateCartTable();
        });
    });

    // Valider la vente
    document.querySelector('#validate-sale').addEventListener('click', function () {
        if (cart.length === 0) {
            alert('Votre panier est vide.');
            return;
        }

        // Envoyer les données au serveur
        fetch('{{ route("admin.ventes.store") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({ cart: cart, total: parseFloat(document.querySelector('#total-price').textContent) }),
        })
        .then(response => response.json())
        .then(data => {
            alert('Vente validée avec succès!');
            cart = [];
            updateCartTable();
        })
        .catch(error => {
            console.error(error);
            alert('Une erreur est survenue.');
        });
    });
</script>

<!-- solar icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
<script src="{{asset('assets/backend/libs/quill/dist/quill.min.js')}}"></script>
<script src="{{asset('assets/backend/js/forms/quill-init.js')}}"></script>
<script src="{{asset('assets/backend/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('assets/backend/js/forms/select2.init.js')}}"></script>
<script src="{{asset('assets/backend/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/backend/js/forms/repeater-init.js')}}"></script>
<script src="{{asset('assets/backend/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>

<script src="{{asset('assets/backend/js/datatable/datatable-advanced.init.js')}}"></script>
@endpush
