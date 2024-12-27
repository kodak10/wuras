@extends('backend.layouts.master')

@section('content')
<div class="page-titles mb-7 mb-md-5">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-12 align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb align-items-center">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="index.html">
                <i class="ti ti-home fs-5"></i>
              </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Ajouter un article</li>
          </ol>
        </nav>
        <h2 class="mb-0 fw-bolder fs-8">Ajouter un article</h2>

        
      </div>
     
    </div>
    <div class="row">
      @if(session('success'))
        <div class="alert customize-alert alert-dismissible text-primary text-primary alert-light-primary bg-primary-subtle fade show remove-close-icon" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="d-flex align-items-center me-3 me-md-0">
                <i class="ti ti-info-circle fs-5 me-2 flex-shrink-0 text-primary"></i>
                {{ session('success') }}
            </div>
        </div>
      @endif

    </div>
  </div>
  <!-- start Basic Area Chart -->
  
  <form action="{{route('admin.articles.store')}}" method="post" id="article-form" enctype="multipart/form-data">
    @csrf
    <div class="row">
      
      
          <div class="col-lg-8 ">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-2">
        
                    <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                      <i class="ti ti-menu fs-5 d-flex"></i>
                    </button>
                  </div>
                  
                    <div class="mb-4">
                      <label class="form-label">Nom de l'article <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror"  id="validationCustom03" value="{{ old('name') }}" name="name" id="validationCustom03" placeholder="Nom de l'article">
                        @error('name')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror

                      <p class="fs-2">Un nom d'article est obligatoire et recommandé pour être unique.</p>
                    </div>
                    <div>
                        <label class="form-label">Description</label>
                        <div id="editor" name="description"></div> <!-- L'éditeur WYSIWYG -->
                        <input type="hidden" name="description" id="description-field" > <!-- Champ caché -->
                        <p class="fs-2 mb-0">Définissez une description de l'article pour une meilleure visibilité.</p>
                    </div>
                  
                  
                </div>
              </div>

                <div class="card">
                  <div class="card-body">
                    
                      <div class="mb-7">
                        <label class="form-label">Prix de base <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control  @error('price') is-invalid @enderror"  name="price" value="{{ old('price', '0') }}">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <p class="fs-2">Fixez le prix de l'article.</p>
                      </div>
                      <div class="mb-7">
                        <label class="form-label">Type de remise</label>
                        <nav>
                          <div class="nav nav-tabs justify-content-between align-items-center gap-9" id="nav-tab" role="tablist">
                            <label for="radio1" class="form-check-label form-check p-3  border gap-2 rounded-2 d-flex flex-fill justify-content-center cursor-pointer" id="customControlValidation2" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" aria-controls="nav-home">
                              <input type="radio" class="form-check-input" name="discount_type" value="none"  checked>
                              <span class="fs-4 text-dark">Pas de réduction</span>
                            </label>
                            <label for="radio2" class="form-check-label p-3 form-check border gap-2 rounded-2 d-flex flex-fill justify-content-center cursor-pointer" id="customControlValidation2" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" aria-controls="nav-profile">
                              <input type="radio" class="form-check-input" name="discount_type" value="percentage" >
                              <span class="fs-4 text-dark">Pourcentage %</span>
                            </label>
                            <label for="radio3" class="form-check-label form-check p-3 border gap-2 rounded-2 d-flex flex-fill justify-content-center cursor-pointer" id="customControlValidation2" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" aria-controls="nav-contact">
                              <input type="radio" class="form-check-input" name="discount_type" value="fixed">
                              <span class="fs-4 text-dark">Prix fixe</span>
                            </label>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade mt-7" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            
                              <div class="form-group">
                                <label class="form-label">Définir le pourcentage de remise <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Pourcentage de réduction" name="discount_value">
                                <p class="fs-2">Définir un pourcentage de remise à appliquer sur
                                  cet article.</p>
                              </div>
                          
                          </div>
                          <div class="tab-pane fade mt-7" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="mb-7">
                              <label class="form-label">Prix ​​réduit fixe <span class="text-danger">*</span>
                              </label>
                              <input type="text" class="form-control" placeholder="Prix réduit" name="discount_value">
                              <p class="fs-2">Définissez le prix réduit du produit. Le produit
                                  sera réduit au
                                  prix fixe déterminé.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    
                  </div>
                </div>
              
                <div class="card">
                  <div class="card-body">
                      <label class="form-label">Ajouter des variantes de l'article</label>
                      <div class="email-repeater mb-3">
                          <div data-repeater-list="variations">
                              <div data-repeater-item class="row mb-3">
                                  <div class="col-md-4">
                                      <select name="variations[][type]" class="select2 form-control">
                                          <option value="Couleur">Couleur</option>
                                          <option value="Taille">Taille</option>
                                          <option value="Poids">Poids</option>
                                      </select>
                                  </div>
                                  <div class="col-md-4 mt-3 mt-md-0">
                                      <select name="variations[][value]" class="form-control">
                                          <!-- Pour Couleur -->
                                          <option value="Couleur" class="couleur-option" disabled>Couleur</option>
                                          <option value="#FF5733">#FF5733 - Rouge</option>
                                          <option value="#33FF57">#33FF57 - Vert</option>
                                          <option value="#3357FF">#3357FF - Bleu</option>
                                          <option value="#F5FF33">#F5FF33 - Jaune</option>
                                          <option value="#FF33F1">#FF33F1 - Rose</option>
                                          <option value="#33FFF0">#33FFF0 - Aqua</option>
                                          <option value="#FF8033">#FF8033 - Orange</option>
                                          <option value="#6A33FF">#6A33FF - Violet</option>
                                          <option value="#F1F133">#F1F133 - Lime</option>
                                          <option value="#FF5733">#FF5733 - Rouge foncé</option>
                                          <!-- Pour Taille -->
                                          <option value="Taille" class="taille-option" disabled>Taille</option>
                                          <option value="S">S</option>
                                          <option value="M">M</option>
                                          <option value="L">L</option>
                                          <option value="XL">XL</option>
                                          <option value="XXL">XXL</option>
                                          <option value="XXXL">XXXL</option>
                                          <!-- Pour Poids, l'utilisateur saisit -->
                                          <option value="Poids" class="poids-option" disabled>Poids</option>
                                      </select>
                                  </div>
                                  <div class="col-md-2 mt-3 mt-md-0">
                                      <button data-repeater-delete="" class="btn bg-danger-subtle text-danger" type="button">
                                          <i class="ti ti-x fs-5 d-flex"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <button type="button" data-repeater-create="" class="btn bg-primary-subtle text-primary">
                              <span class="fs-4 me-1">+</span>
                              Ajouter une autre variante
                          </button>
                      </div>
                  </div>
              </div>
              
              {{-- <div class="card">
                <div class="card-body">
                    <label class="form-label">Ajouter des variantes de l'article</label>
                    <div class="email-repeater mb-3">
                        <div data-repeater-list="variations">
                            <div data-repeater-item class="row mb-3">
                                <div class="col-md-4">
                                    <select name="variations[][type]" class="select2 form-control" required>
                                        <option value="Couleur">Couleur</option>
                                        <option value="Taille">Taille</option>
                                        <option value="Poids">Poids</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-3 mt-md-0">
                                    <input type="text" name="variations[][value]" class="form-control" placeholder="Variation" required>
                                </div>
                                <div class="col-md-2 mt-3 mt-md-0">
                                    <button data-repeater-delete="" class="btn bg-danger-subtle text-danger" type="button">
                                        <i class="ti ti-x fs-5 d-flex"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" data-repeater-create="" class="btn bg-primary-subtle text-primary">
                            <span class="fs-4 me-1">+</span>
                            Ajouter une autre variante
                        </button>
                    </div>
                </div>
            </div> --}}
              
            <div class="card">
              <div class="row">
                  <div class="col-lg-6">
                    <div class="card-body">
                      <label class="form-label mb-2">Quantité (stock)</label>
                      <input type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ old('quantite', 3) }}" min="1" max="100" step="1" required>
    
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card-body">
                    <label class="form-label mb-2">LImite de stock</label>
                    <input type="number" class="form-control @error('limit_quantite') is-invalid @enderror" name="limit_quantite" value="{{ old('limit_quantite', 1) }}" min="1" max="100" step="1">
  
                </div>
                </div>
              </div>
          </div>
          </div>
          
      
      
      <div class="form-actions mb-5">
        <button type="submit" class="btn btn-primary">
          Sauvegarder
        </button>
        <button type="button" class="btn bg-danger-subtle text-danger ms-6">
          Annuler
        </button>
      </div>

      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
      
    </div>


  <!-- end Basic Area Chart -->

  </form>

  {{-- @forelse ($demos as $article) 
  <p>Image de couverture</p>
  <img src="{{ asset('storage/' . $article->couverture) }}" alt="Couverture">

  @if ($article->images && $article->images->isNotEmpty()) 
      <p>Images de l'article</p>

      @foreach ($article->images as $image) 
          <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image de l'article">
      @endforeach
  @else
      <p>Aucune image disponible pour cet article.</p>
  @endif
@empty
  <p>Rien à afficher</p>
@endforelse --}}






  @push('styles')
  <link rel="stylesheet" href="{{asset('assets/backend/libs/quill/dist/quill.snow.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/libs/dropzone/dist/min/dropzone.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/libs/select2/dist/css/select2.min.css')}}">
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


<script>
    // Initialisation du Toast de SweetAlert2
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end', // Positionner en haut à droite
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast',
        },
        showConfirmButton: false,
        timer: 3000,  // L'alerte restera pendant 3 secondes
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);  // Arrêter le timer au survol
            toast.addEventListener('mouseleave', Swal.resumeTimer);  // Reprendre le timer quand le survol est terminé
        },
    });
  
    // Produits avec faible stock récupérés en JavaScript
    const lowStockProducts = @json($lowStockProducts);
  
    // Fonction pour afficher un Toast pour un produit spécifique avec un délai
    function showToast(productName, delay) {
        setTimeout(() => {
            Toast.fire({
                icon: 'warning',
                title: 'Le produit ' + productName + ' est en faible stock!',
            });
        }, delay);
    }
  
    // Afficher les toasts pour chaque produit en faible stock avec un délai
    lowStockProducts.forEach((product, index) => {
        // Le délai augmente à chaque produit pour les espacer
        const delay = index * 3500;  // Délai de 3,5 secondes entre chaque toast
        showToast(product.name, delay);
    });
  </script>
  
@endpush

@endsection