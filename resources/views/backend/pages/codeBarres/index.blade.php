@extends('backend.layouts.master')

@section('content')
<div class="page-titles mb-7 mb-md-5">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-12 align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb align-items-center">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="/admin">
                <i class="ti ti-home fs-5"></i>
              </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Liste des articles</li>
          </ol>
        </nav>
      </div>
      <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
       
        <a href="{{route('admin.articles.create')}}" class="btn btn-primary d-flex align-items-center ms-2">
          <i class="ti ti-plus me-1"></i>
          Ajouter
        </a>
      </div>
    </div>
  </div>

  <div class="product-list">
    <div class="card">
      <div class="card-body p-3">
        @if(session('success'))
            <div class="alert customize-alert alert-dismissible text-primary text-primary alert-light-primary bg-primary-subtle fade show remove-close-icon" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="d-flex align-items-center me-3 me-md-0">
                    <i class="ti ti-info-circle fs-5 me-2 flex-shrink-0 text-primary"></i>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="datatables">
            <!-- Start File export -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="lang_file" class="table w-100 table-striped table-bordered display">
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
                                        <!-- Checkbox -->
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="{{ $article->id }}" id="flexCheckDefault{{ $article->id }}">
                                            </div>
                                        </td>
        
                                        <!-- Catégories -->
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
        
                                        <!-- Tags -->
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
        
                                        <!-- Couverture -->
                                        <td>
                                            <div class="d-flex align-items-center m-auto">
                                                <img src="{{ asset('storage/' . $article->couverture) }}" class="rounded-circle" alt="{{ $article->name }}" width="56" height="56">
                                            </div>
                                        </td>
        
                                        <!-- Nom -->
                                        <td>
                                            <p class="mb-0">{{ $article->name }}</p>
                                        </td>
        
                                        <!-- Prix -->
                                        <td>
                                            <p class="mb-0">{{ number_format($article->price, 2) }} FCFA</p>
                                        </td>
        
                                        <!-- Statut -->
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
        
                                        <!-- Stock -->
                                        <td>
                                            <h6 class="mb-0 fs-4 {{ $article->quantite <= $article->limit_quantite ? 'text-danger' : '' }}">
                                                {{ $article->quantite }}
                                            </h6>
                                        </td>
        
                                        <!-- Actions -->
                                        <td>
                                            <!-- Bouton pour ouvrir le modal -->
                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barcodeModal{{ $article->id }}">
                                                <i class="ti ti-barcode"></i>
                                            </a>
                                        </td>
                                    </tr>
        
                                    <!-- Modal pour cet article -->
                                    <div class="modal fade" id="barcodeModal{{ $article->id }}" tabindex="-1" aria-labelledby="barcodeModalLabel{{ $article->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="barcodeModalLabel{{ $article->id }}">Générer le Code-Barres pour {{ $article->name }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('admin.codeBarres.store') }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <!-- Options d'affichage -->
                                                        <div class="mb-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label">Nom de l'article</label>
                                                                <input type="checkbox" class="form-check-input" name="show_name">
                                                            </div>
                                                        </div>
        
                                                        <div class="mb-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label">Prix de l'article</label>
                                                                <input type="checkbox" class="form-check-input" name="show_price">
                                                            </div>
                                                        </div>
        
                                                        <div class="mb-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label">Prix promotionnel de l'article</label>
                                                                <input type="checkbox" class="form-check-input" name="show_promo">
                                                            </div>
                                                        </div>
        
                                                        <div class="mb-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label">Remise sur l'article</label>
                                                                <input type="checkbox" class="form-check-input" name="show_discount">
                                                            </div>
                                                        </div>
        
                                                        <!-- Quantité -->
                                                        <div class="mb-3">
                                                            <label for="quantityInput{{ $article->id }}" class="form-label">Quantité</label>
                                                            <input type="number" class="form-control" id="quantityInput{{ $article->id }}" name="quantity" required min="1">
                                                        </div>
        
                                                        <!-- Support -->
                                                        <div class="mb-3">
                                                            <label for="supportInput{{ $article->id }}" class="form-label">Support</label>
                                                            <select class="form-select" id="supportInput{{ $article->id }}" name="support">
                                                                <option value="a4">A4</option>
                                                                <option value="a5">A5</option>
                                                                <option value="other">Autre</option>
                                                            </select>
                                                        </div>
                                                    </div>
        
                                                    <!-- Champs cachés pour cet article -->
                                                    <input type="hidden" name="product_id" value="{{ $article->id }}">
                                                    <input type="hidden" name="promotion_type" value="{{ $article->promotion_type }}">
                                                    <input type="hidden" name="promotion_value" value="{{ $article->promotion_value }}">
                                                    <input type="hidden" name="name" value="{{ $article->name }}">
                                                    <input type="hidden" name="price" value="{{ $article->price }}">
        
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                        <button type="submit" class="btn btn-primary">Enregistrer et Imprimer</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
                                    <th>Statut</th>
                                    <th>Stock</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        

      </div>
    </div>
  </div>
   



  
@push('styles')
  <link rel="stylesheet" href="{{asset('assets/backend/libs/quill/dist/quill.snow.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/libs/dropzone/dist/min/dropzone.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/libs/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="{{asset('assets/backend/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}">

@endpush

@push('scripts')


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

<script>
    function confirmDelete(articleId) {
        // Afficher une boîte de confirmation avant de soumettre le formulaire
        if (confirm("Êtes-vous sûr de vouloir supprimer cet article ?")) {
            // Si l'utilisateur clique sur "OK", soumettre le formulaire
            document.getElementById('delete-form-' + articleId).submit();
        }
    }
</script>
@endpush

@endsection