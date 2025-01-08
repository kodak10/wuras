@extends('backend.layouts.master')

@section('content')
<div class="page-titles mb-7 mb-md-5">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-12 align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb align-items-center">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="{{route('admin.articles.index')}}">
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
  
  <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" id="article-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="ti ti-menu fs-5 d-flex"></i>
                        </button>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Nom de l'article <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="validationCustom03" value="{{ old('name', $article->name) }}" placeholder="Nom de l'article">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <p class="fs-2">Un nom d'article est obligatoire et recommandé pour être unique.</p>
                    </div>

                    <div class="">
                        <label class="form-label">Description</label>
                    
                        <!-- Éditeur Quill -->
                        <div id="editor" name="description"></div>
                    
                        <!-- Champ caché qui contient la description pour soumettre avec le formulaire -->
                        <input type="hidden" name="description" id="description-field" value="{{ old('description', $article->description) }}">
                    
                        <p class="fs-2 mb-0">Définissez une description de l'article pour une meilleure visibilité.</p>
                    </div>
                    
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="mb-7">
                        <label class="form-label">Prix de base <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $article->price) }}">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <p class="fs-2">Fixez le prix de l'article.</p>
                    </div>

                    {{-- <div class="mb-4">
                        <label class="form-label">Cet article est-il en promotion ?</label>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="is_promotion" name="is_promotion" value="1" {{ old('is_promotion') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_promotion">Oui</label>
                        </div>
                    </div> --}}

                    <div class="mb-4">
                        <label class="form-label">Cet article est-il en promotion ?</label>
                        <div class="form-check form-switch">
                            <input 
                                type="checkbox" 
                                class="form-check-input" 
                                id="is_promotion" 
                                name="is_promotion" 
                                value="1" 
                                {{ old('is_promotion', $article->is_promotion ?? 0) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_promotion">Oui</label>
                        </div>
                    </div>
                    

                    <!-- Détails de la promotion -->
                    <div id="promotion-details" style="{{ $article->is_promotion ? 'display: block;' : 'display: none;' }}">
                        <div class="mb-4">
                            <label class="form-label">Type de remise</label>
                            <select class="form-control" name="promotion_type">
                                <option value="percentage" {{ old('promotion_type', $article->promotion_type) === 'percentage' ? 'selected' : '' }}>Pourcentage</option>
                                <option value="fixed" {{ old('promotion_type', $article->promotion_type) === 'fixed' ? 'selected' : '' }}>Montant fixe</option>
                            </select>
                            @error('promotion_type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Valeur de la remise</label>
                            <input type="text" class="form-control" name="promotion_value" value="{{ old('promotion_value', $article->promotion_value) }}">
                            @error('promotion_value')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Date de début de la promotion</label>
                            <input type="date" class="form-control" name="promotion_start" value="{{ old('promotion_start', $article->promotion_start) }}">
                            @error('promotion_start')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Date de fin de la promotion</label>
                            <input type="date" class="form-control" name="promotion_end" value="{{ old('promotion_end', $article->promotion_end) }}">
                            @error('promotion_end')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="card">
                <div class="card-body">
                    <label class="form-label">Ajouter des variantes de l'article</label>
                    <div class="email-repeater mb-3">
                        <div data-repeater-list="variations">
                            @foreach($article->variations as $variation)
                                <div data-repeater-item class="row mb-3">
                                    <div class="col-md-4">
                                        <select name="variations[][type]" class="select2 form-control">
                                            <option value="Couleur" {{ $variation->type == 'Couleur' ? 'selected' : '' }}>Couleur</option>
                                            <option value="Taille" {{ $variation->type == 'Taille' ? 'selected' : '' }}>Taille</option>
                                            <option value="Poids" {{ $variation->type == 'Poids' ? 'selected' : '' }}>Poids</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-3 mt-md-0">
                                        <input type="text" name="variations[][value]" class="form-control" placeholder="Variation" value="{{ $variation->value }}">
                                    </div>
                                    <div class="col-md-2 mt-3 mt-md-0">
                                        <button data-repeater-delete="" class="btn bg-danger-subtle text-danger" type="button">
                                            <i class="ti ti-x fs-5 d-flex"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" data-repeater-create="" class="btn bg-primary-subtle text-primary">
                            <span class="fs-4 me-1">+</span>
                            Ajouter une autre variante
                        </button>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="card">
                <div class="row">
                    <div class="col-lg-6">
                      <div class="card-body">
                        <label class="form-label mb-2">Quantité (stock)</label>
                        <input type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ old('quantite', floor($article->quantite)) }}" min="1" max="100" step="1" disabled>
      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-body">
                      <label class="form-label mb-2">Limite de stock</label>
                      <input type="number" class="form-control @error('limit_quantite') is-invalid @enderror" name="limit_quantite" value="{{ old('limit_quantite', floor($article->limit_quantite)) }}" min="1" max="100" step="1" required>
    
                  </div>
                  </div>
                </div>

                
            </div> --}}
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Catégories</label>
                        <select class="select2 form-control @error('categories') is-invalid @enderror" multiple="multiple" name="categories[]">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}" {{ in_array($categorie->id, old('categories', $article->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                                    {{ $categorie->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('categories')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <p class="fs-2 mb-0">Ajouter l'article à une catégorie.</p>
                    </div>


                    <div class="mt-7">
                        <label class="form-label">Tags</label>
                        <select class="select2 form-control @error('tags') is-invalid @enderror" multiple="multiple" name="tags[]">
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" 
                                    @if(in_array($tag->id, old('tags', $article->tags->pluck('id')->toArray())))
                                        selected
                                    @endif
                                >
                                    {{ $tag->tag_name }}
                                </option>
                            @endforeach
                        </select>
                    
                        @error('tags')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    
                        <p class="fs-2 mb-0 mb-3">
                            Ajouter des mots clés à l'article.
                        </p>
                    </div>
                    
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="form-label">Status</label>
            
                        <!-- Afficher une indication de l'état actuel de l'article -->
                        <div class="p-2 h-100 
                            @if ($article->status == 'published') bg-success
                            @elseif ($article->status == 'draft') bg-warning
                            @elseif ($article->status == 'inactive') bg-secondary
                            @endif
                            rounded-circle">
                        </div>
                    </div>
            
                    <div>
                        <!-- Sélectionner le statut de l'article -->
                        <select class="form-select mr-sm-2 mb-2" id="inlineFormCustomSelect" name="status">
                            <option value="published" @selected($article->status == 'published')>Publié</option>
                            <option value="draft" @selected($article->status == 'draft')>Brouillon</option>
                            <option value="inactive" @selected($article->status == 'inactive')>Inactif</option>
                        </select>
                        <p class="fs-2 mb-0">
                            Définissez l'état de l'article.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <label class="form-label mb-2">Vignette</label>
            
                    <input type="file" name="couverture" id="couverture" class="dropzone dz-clickable mb-2 w-100" >
                    <!-- Afficher l'image de couverture existante, si elle existe -->
                    @if($article->couverture)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $article->couverture) }}" alt="Couverture" class="img-fluid" style="max-height: 100px; border-radius:20%">
                        </div>
                    @endif
                    <p class="fs-2 text-center mb-0 mt-2">
                        Remplacez l’image de couverture de l'article. Uniquement les fichiers image d'extensions *.png, *.jpg et *.jpeg sont acceptés.
                    </p>
                </div>
            </div>
            
            
           
            
            <div class="card">
                <div class="card-body">
                    <label class="form-label mb-2">Images</label>
                    <input type="file" name="images[]" id="images" class="dropzone dz-clickable mb-2 w-100" multiple>
                    <p class="fs-2 text-center mb-0 mt-2">
                        Importez les images de l'article. Uniquement les fichiers image d'extensions *.png, *.jpg et *.jpeg sont acceptés.
                    </p>
                </div>
            </div>
            
            <!-- Afficher les images existantes -->
            @if($images->isNotEmpty())
    <div class="card mt-4">
        <div class="card-body">
            <label class="form-label mb-2">Images existantes</label>
            <div class="row">
                @foreach($images as $image)
                    <div class="col-md-4 mb-3">
                        <div class="image-container" style="position: relative; display: inline-block;">

                            <!-- Image -->
                            <img src="{{ asset($image->image_path) }}" class="img-fluid custom-image" alt="Image" style="width: 100px; height: 100px; object-fit: cover;">

                            <!-- Icône de suppression avec formulaire -->
                            <form action="{{ route('admin.image.delete', ['article' => $article->id, 'id' => $image->id]) }}" method="POST" style="position: absolute; top: 0; left: 0; background-color: transparent; border: none; cursor: pointer;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn" style="background-color: transparent; border: none; cursor: pointer;">
                                    <i class="fas fa-trash-alt" style="color: red; font-size: 18px;"></i>
                                </button>
                            </form>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@else
    <div class="card mt-4">
        <div class="card-body">
            <p>Aucune image disponible pour cet article.</p>
        </div>
    </div>
@endif

            
            

        </div>
        <button type="submit" class="btn btn-primary w-100" id="addArticle">Mettre à jour l'article</button>

    </div>
</form>

@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif




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

  
  // Lorsque la variation de type est modifiée
  document.addEventListener('DOMContentLoaded', function() {
      const variationTypes = document.querySelectorAll('select[name="variations[][type]"]');

      variationTypes.forEach((select) => {
          select.addEventListener('change', function() {
              const value = this.value;
              const inputField = this.closest('.row').querySelector('select[name="variations[][value]"]');
              
              // Réinitialiser les options
              inputField.innerHTML = '';

              if (value === 'Couleur') {
                  inputField.innerHTML = `
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
                  `;
              } else if (value === 'Taille') {
                  inputField.innerHTML = `
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XXL</option>
                      <option value="XXXL">XXXL</option>
                  `;
              } else if (value === 'Poids') {
                  inputField.innerHTML = '<input type="text" name="variations[][value]" class="form-control" placeholder="Poids" required>';
              }
          });
      });
  });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // JavaScript pour afficher/masquer les détails de la promotion en fonction de l'état du checkbox
        document.getElementById('is_promotion').addEventListener('change', function() {
            var promotionDetails = document.getElementById('promotion-details');
            if (this.checked) {
                promotionDetails.style.display = 'block';
            } else {
                promotionDetails.style.display = 'none';
            }
        });
    });
</script>



<script>
   
    // Récupérer la description de l'article (si elle existe) et la remplir dans Quill
    var description = {!! json_encode(old('description', $article->description)) !!};
    quill.root.innerHTML = description;

    // Capture le contenu de Quill dans le champ caché lors de la soumission du formulaire
    document.querySelector('form').addEventListener('submit', function(e) {
        const description = quill.root.innerHTML; // Récupérer le contenu HTML de Quill
        document.getElementById('description-field').value = description; // Mettre le contenu dans le champ caché
    });
</script>

@endpush

@endsection