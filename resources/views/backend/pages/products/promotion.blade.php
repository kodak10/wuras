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
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <!-- Nom de l'article -->
                    <div class="mb-4">
                        <label class="form-label">Nom de l'article <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" placeholder="Nom de l'article">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <p class="fs-2">Un nom d'article est obligatoire et recommandé pour être unique.</p>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" placeholder="Décrivez l'article ici...">{{ old('description') }}</textarea>
                        <p class="fs-2">Définissez une description de l'article pour une meilleure visibilité.</p>
                    </div>
                </div>
            </div>

            <!-- Prix et promotion -->
            <div class="card">
                <div class="card-body">
                    <!-- Prix de base -->
                    <div class="mb-4">
                        <label class="form-label">Prix de base <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', '0') }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <p class="fs-2">Fixez le prix de l'article.</p>
                    </div>

                    <!-- Promotion toggle -->
                    <div class="mb-4">
                        <label class="form-label">Cet article est-il en promotion ?</label>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="is_promotion" name="is_promotion" value="1" {{ old('is_promotion') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_promotion">Oui</label>
                        </div>
                    </div>

                    <!-- Détails de la promotion -->
                    <div id="promotion-details" style="display: none;">
                        <div class="mb-4">
                            <label class="form-label">Type de remise</label>
                            <select class="form-control" name="promotion_type">
                                <option value="percentage" {{ old('promotion_type') === 'percentage' ? 'selected' : '' }}>Pourcentage</option>
                                <option value="fixed" {{ old('promotion_type') === 'fixed' ? 'selected' : '' }}>Montant fixe</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Valeur de la remise</label>
                            <input type="text" class="form-control" name="promotion_value" value="{{ old('promotion_value') }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Date de début de la promotion</label>
                            <input type="date" class="form-control" name="promotion_start" value="{{ old('promotion_start') }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Date de fin de la promotion</label>
                            <input type="date" class="form-control" name="promotion_end" value="{{ old('promotion_end') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quantité -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <label class="form-label">Quantité (stock)</label>
                    <input type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ old('quantite', 3) }}" min="1" step="1" required>
                    @error('quantite')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer l'article</button>
</form>

<script>
    // Affiche/Masque les détails de la promotion selon l'état du toggle
    document.getElementById('is_promotion').addEventListener('change', function () {
        const promotionDetails = document.getElementById('promotion-details');
        promotionDetails.style.display = this.checked ? 'block' : 'none';
    });
</script>

  

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

 
@endpush

@endsection