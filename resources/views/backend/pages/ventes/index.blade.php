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
            <li class="breadcrumb-item" aria-current="page">Liste des commandes</li>
          </ol>
        </nav>
        <h2 class="mb-0 fw-bolder fs-8">Liste des commandes</h2>
      </div>
      {{-- <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
        <select class="form-select w-auto bg-primary-subtle border-0" aria-label="Default select example">
          <option selected="">Today 23 March</option>
          <option value="1">Today 23 March</option>
          <option value="2">Today 24 March</option>
          <option value="3">Today 25 March</option>
        </select>
        <a href="javascript:void(0)" class="btn btn-primary d-flex align-items-center ms-2">
          <i class="ti ti-plus me-1"></i>
          Add New
        </a>
      </div> --}}
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
        
        <div class="table-responsive">
            <table id="lang_file" class="table w-100 table-striped table-bordered display ">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </th>
                        <th>Date</th>
                        <th>Articles</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventes as $vente)
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="{{ $vente->id }}" id="flexCheckDefault{{ $vente->id }}">
                                </div>
                            </td>

                            <td> {{ $vente->created_at }}</td>
                            
                            <td>
                                
                                    <p class="mb-0">{{ $vente->article->name }}</p>
                            </td>
                           
                            <td class="order-total">
                                    <span class="order-quantity">{{ $vente->quantity }}</span>
                            </td>
                            <td class="order-total">
                                <span class="order-quantity">{{ $vente->total }}</span>
                        </td>
                          
                           
                            <td>
                                <a class="fs-6 text-muted" href="{{ route('admin.ventes.edit', $vente->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Details">
                                    <i class="ti ti-eye"></i>
                                </a>

                                {{-- <form action="{{ route('admin.commandes.destroy', $commande->id) }}" method="POST" class="d-inline" id="delete-form-{{ $commande->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-link text-danger fs-6 p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Supprimer" onclick="confirmDelete({{ $commande->id }})">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </form> --}}
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
                        <th>Date</th>
                        <th>Articles</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>

            </table>
          
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