@extends('backend.layouts.master')

@section('content')
<div class="page-titles mb-7 mb-md-5">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-12 align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb align-items-center">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="/admin/commandes">
                <i class="ti ti-home fs-5"></i>
              </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Mise à jour de la commande</li>
          </ol>
        </nav>
        <h2 class="mb-0 fw-bolder fs-8"></h2>
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
  <div class="checkout">
    <div class="card">
      @if ($errors->has('message'))
      <div class="alert alert-danger">
          {!! $errors->first('message') !!}
      </div>
  @endif
  
      <div class="card-body p-4">
        <a href="{{route('admin.commandes.index')}}" class="btn btn-primary mb-3">Retour</a>

        <div class="wizard-content">
            <form action="{{ route('admin.commandes.update', $commande->id) }}" method="POST" class="tab-wizard wizard-circle">
                @csrf
                @method('PUT')
               
                <!-- Step 1 -->
            <h6>Panier</h6>
            <section>
              <div class="table-responsive">
                <table class="table align-middle text-nowrap mb-0">
                  <thead class="fs-2">
                    <tr>
                      <th>Article</th>
                      <th>Quantité</th>
                      <th class="text-end">Prix</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($commande->orderDetails as $detail)
                        <tr>
                            
                            <td>
                                <p class="mb-0">{{ $detail->article->name }}</p>
                            </td>

                            <td>
                                <p class="mb-0">{{ $detail->quantity }}</p>
                            </td>

                            <td>
                                <p class="mb-0">{{ $detail->unit_price }}</p>
                            </td>
                            
                            
                        </tr>
                    @endforeach
                </tbody>
                
                  {{-- <tbody>
                    <tr>
                      <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-3 overflow-hidden">
                          <img src="../assets/images/products/s11.jpg" alt="matdash-img" class="img-fluid rounded" width="80">
                          <div>
                            <h6 class="fw-semibold fs-4 mb-0">Super Games</h6>
                            <p class="mb-0">toys</p>
                            <a href="javascript:void(0)" class="text-danger fs-4">
                              <i class="ti ti-trash"></i>
                            </a>
                          </div>
                        </div>
                      </td>
                      <td class="border-bottom-0">
                        <div class="input-group input-group-sm flex-nowrap rounded">
                          <button class="btn minus min-width-40 py-0 border-end border-muted border-end-0 text-muted" type="button" id="add1">
                            <i class="ti ti-minus"></i>
                          </button>
                          <input type="text" class="min-width-40 flex-grow-0 border border-muted text-muted fs-3 fw-semibold form-control text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1">
                          <button class="btn min-width-40 py-0 border border-muted border-start-0 text-muted add" type="button" id="addo2">
                            <i class="ti ti-plus"></i>
                          </button>
                        </div>
                      </td>
                      <td class="text-end border-bottom-0">
                        <h6 class="fs-4 fw-semibold mb-0">$285</h6>
                      </td>
                    </tr>
                  </tbody> --}}
                </table>
                
              </div>
              <div class="card shadow-none border mt-3">
                <div class="card-body p-4">
                  <h6 class="mb-3 fs-4 fw-semibold">Note d'information</h6>
                  <p class="mb-1 fs-2">{{ $commande->order_notes ?? 'Aucune note écrite' }}</p>
  
                </div>
              </div>
              <div class="order-summary border rounded p-4 my-4">
                <div class="p-3">
                  <h5 class="fs-5 fw-semibold mb-4">Récapitulatif de la commande</h5>
                  <div class="d-flex justify-content-between mb-4">
                    <p class="mb-0 fs-4">Total des articles</p>
                    <h6 class="mb-0 fs-4 fw-semibold">{{ $commande->total_price }} </h6>
                  </div>
                  <div class="d-flex justify-content-between mb-4">
                    <p class="mb-0 fs-4">Reduction</p>
                    <h6 class="mb-0 fs-4 fw-semibold text-danger">0</h6>
                  </div>
                  <div class="d-flex justify-content-between mb-4">
                    <p class="mb-0 fs-4">Frais de livraison</p>
                    <h6 class="mb-0 fs-4 fw-semibold">Aucun</h6>
                  </div>
                  <div class="d-flex justify-content-between">
                    <h6 class="mb-0 fs-4 fw-semibold">Total</h6>
                    <h6 class="mb-0 fs-5 fw-semibold">{{ $commande->total_price }} </h6>
                  </div>
                </div>
              </div>
            </section>
           
            <!-- Step 2 -->
            <h6>Utilisateur & adresse de livraison</h6>
            <section>
              <div class="billing-address-content">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card shadow-none border">
                      <div class="card-body p-4">
                        <h6 class="mb-3 fs-4 fw-semibold">{{ $commande->user->name }}</h6>
                        <p class="mb-1 fs-2">{{ $commande->user->address ?? 'Adresse non disponible' }}</p>
                        <p class="mb-1 fs-2">{{ $commande->user->email ?? 'Email non disponible' }}</p>
                        <p class="mb-1 fs-2">Membre depuis :{{ $commande->user->created_at ?? 'Erreur' }}</p>

                        <h6 class="d-flex align-items-center gap-2 my-4 fw-semibold fs-4">
                            <i class="ti ti-device-mobile fs-7"></i>{{ $commande->user->phone }}
                        </h6>
                        {{-- <a href="javascript:void(0)" class="btn btn-outline-primary  billing-address">Deliver To
                          this address</a> --}}
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card shadow-none border">
                      <div class="card-body p-4">
                        <h6 class="mb-3 fs-4 fw-semibold">Adresse principale</h6>
                        <p class="mb-1 fs-2">{{ $commande->user->address ?? 'Adresse non disponible' }}</p>
                        <h6 class="d-flex align-items-center gap-2 my-4 fw-semibold fs-4">
                          <i class="ti ti-device-mobile fs-7"></i>9999501050
                        </h6>
                        {{-- <a href="javascript:void(0)" class="btn btn-outline-primary  billing-address">Deliver To
                          this address</a> --}}
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card shadow-none border">
                      <div class="card-body p-4">
                        <h6 class="mb-3 fs-4 fw-semibold">Adresse de livraison</h6>
                        <p class="mb-1 fs-2">{{ $commande->user->address ?? 'Adresse non disponible' }}</p>
                        <h6 class="d-flex align-items-center gap-2 my-4 fw-semibold fs-4">
                          <i class="ti ti-device-mobile fs-7"></i>9999501050
                        </h6>
                        {{-- <a href="javascript:void(0)" class="btn btn-outline-primary  billing-address">Deliver To
                          this address</a> --}}
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="payment-method-list payment-method">
                <div class="delivery-option btn-group-active  card shadow-none border">
                  <div class="card-body p-4">
                    <h6 class="mb-3 fw-semibold fs-4">Delivery Option</h6>
                    <div class="btn-group flex-row gap-3 w-100" role="group" aria-label="Basic radio toggle button group">
                      <div class="position-relative form-check btn-custom-fill flex-fill ps-0">
                        <input type="radio" class="form-check-input ms-4 round-16" name="deliveryOpt1" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio1">
                          <div class="text-start ps-2">
                            <h6 class="fs-4 fw-semibold mb-0">Free delivery</h6>
                            <p class="mb-0 text-muted">Delivered on Firday, May 10</p>
                          </div>
                        </label>
                      </div>
                      <div class="position-relative form-check btn-custom-fill flex-fill ps-0">
                        <input type="radio" class="form-check-input ms-4 round-16" name="deliveryOpt1" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio2">
                          <div class="text-start ps-2">
                            <h6 class="fs-4 fw-semibold mb-0">Fast delivery ($2,00)</h6>
                            <p class="mb-0 text-muted">Delivered on Wednesday, May 8</p>
                          </div>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="payment-option btn-group-active  card shadow-none border">
                  <div class="card-body p-4">
                    <h6 class="mb-3 fw-semibold fs-4">Payment Option</h6>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="btn-group flex-column" role="group" aria-label="Basic radio toggle button group">
                          <div class="position-relative mb-3 w-100 form-check btn-custom-fill ps-0">

                            <input type="radio" class="form-check-input ms-4 round-16" name="paymentType1" id="btnradio3" autocomplete="off" checked>

                            <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio3">
                              <div class="d-flex align-items-center">
                                <div class="text-start ps-2">
                                  <h6 class="fs-4 fw-semibold mb-0">Pay with Paypal</h6>
                                  <p class="mb-0 text-muted">You will be redirected to PayPal website to
                                    complete your purchase securely.</p>
                                </div>
                                <img src="../assets/images/svgs/paypal.svg" alt="matdash-img" class="img-fluid ms-auto">
                              </div>
                            </label>
                          </div>
                          <div class="position-relative mb-3 form-check btn-custom-fill ps-0">
                            <input type="radio" class="form-check-input ms-4 round-16" name="paymentType1" id="btnradio4" autocomplete="off">
                            <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio4">
                              <div class="d-flex align-items-center">
                                <div class="text-start ps-2">
                                  <h6 class="fs-4 fw-semibold mb-0">Credit / Debit Card</h6>
                                  <p class="mb-0 text-muted">We support Mastercard, Visa, Discover and Stripe.
                                  </p>
                                </div>
                                <img src="../assets/images/svgs/mastercard.svg" alt="matdash-img" class="img-fluid ms-auto">
                              </div>
                            </label>
                          </div>
                          <div class="position-relative form-check btn-custom-fill ps-0">
                            <input type="radio" class="form-check-input ms-4 round-16" name="paymentType1" id="btnradio5" autocomplete="off">
                            <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio5">
                              <div class="text-start ps-2">
                                <h6 class="fs-4 fw-semibold mb-0">Cash on Delivery</h6>
                                <p class="mb-0 text-muted">Pay with cash when your order is delivered.</p>
                              </div>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <img src="../assets/images/products/payment.svg" alt="matdash-img" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="order-summary border rounded p-4 my-4">
                  <div class="p-3">
                    <h5 class="fs-5 fw-semibold mb-4">Order Summary</h5>
                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-0 fs-4">Sub Total</p>
                      <h6 class="mb-0 fs-4 fw-semibold">$285</h6>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-0 fs-4">Discount 5%</p>
                      <h6 class="mb-0 fs-4 fw-semibold text-danger">-$14</h6>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-0 fs-4">Shipping</p>
                      <h6 class="mb-0 fs-4 fw-semibold">Free</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                      <h6 class="mb-0 fs-4 fw-semibold">Total</h6>
                      <h6 class="mb-0 fs-5 fw-semibold">$271</h6>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Step 3 -->
            {{-- <h6>Payment</h6>
            <section class="payment-method text-center">
              <h5 class="fw-semibold fs-5">Thank you for your purchase!</h5>
              <h6 class="fw-semibold text-primary mb-7">Your order id: 3fa7-69e1-79b4-dbe0d35f5f5d</h6>
              <img src="../assets/images/products/payment-complete.svg" alt="matdash-img" class="img-fluid mb-4" width="350">
              <p class="mb-0 fs-2">We will send you a notification
                <br>within 2 days when it ships.
              </p>
              <div class="d-sm-flex align-items-center justify-content-between my-4">
                <a href="eco-shop.html" class="btn btn-success d-block mb-2 mb-sm-0">Continue Shopping</a>
                <a href="javascript:void(0)" class="btn btn-primary d-block">Download Receipt</a>
              </div>
            </section> --}}

            @foreach ($commande->orderDetails as $detail)
                <input type="hidden" name="article_id[]" value="{{ $detail->article->id }}">
                <input type="hidden" name="quantite[]" value="{{ $detail->quantity }}" min="1">

            @endforeach
            
            <select name="status" id="status" class="form-control">
              <option value="available" {{ $commande->status == 'available' ? 'selected' : '' }}>Disponible au magasin</option>
              <option value="shipped" {{ $commande->status == 'shipped' ? 'selected' : '' }}>En Expédition</option>
              <option value="cancelled" {{ $commande->status == 'cancelled' ? 'selected' : '' }}>Annuler</option>
              <option value="delivered" {{ $commande->status == 'delivered' ? 'selected' : '' }}>Livré</option>


              <!-- Ajouter d'autres options si nécessaire -->
          </select>
            <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
            <button type="submit" class="btn btn-secondary">Valider la commande</button>
          </form>
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