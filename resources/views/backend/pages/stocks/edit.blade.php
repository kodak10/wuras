@extends('backend.layouts.master')

@section('content')
<div class="page-titles mb-7 mb-md-5">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-12 align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb align-items-center">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="/admin/stock">
                <i class="ti ti-home fs-5"></i>
              </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Mise à jour du stock</li>
          </ol>
        </nav>

        
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
  
  <form action="{{ route('admin.stock.update', $article->id) }}" method="POST" id="article-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="row">
                    <div class="col-lg-6">
                      <div class="card-body">
                        <label class="form-label mb-2">Quantité (stock)</label>
                        <input type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ old('quantite', floor($article->quantite)) }}" min="1" max="100" step="1">
      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-body">
                      <label class="form-label mb-2">Limite de stock</label>
                      <input type="number" class="form-control @error('limit_quantite') is-invalid @enderror" name="limit_quantite" value="{{ old('limit_quantite', floor($article->limit_quantite)) }}" min="1" max="100" step="1" required>
    
                  </div>
                  </div>
                </div>

                
            </div>
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