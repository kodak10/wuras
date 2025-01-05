 <!-- Sidebar Start -->
 <aside class="left-sidebar with-vertical">
    <div><!-- ---------------------------------- -->
      <!-- Start Vertical Layout Sidebar -->
      <!-- ---------------------------------- -->
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/" class="text-nowrap logo-img">
          <img src="{{asset('assets/images/logo.png')}}" class="dark-logo" alt="Logo-Dark" style="height: 100px; width:100%"/>
          <img src="{{asset('assets/images/logo.png')}}" class="light-logo" alt="Logo-light" style="height: 100px; width:100%"/>
        </a>
        <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
          <i class="ti ti-x"></i>
        </a>
      </div>


      <nav class="sidebar-nav scroll-sidebar" data-simplebar>
        <ul id="sidebarnav">
          <!-- ---------------------------------- -->
          <!-- Home -->
          <!-- ---------------------------------- -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Accueil</span>
          </li>
          <!-- ---------------------------------- -->
          <!-- Dashboard -->
          <!-- ---------------------------------- -->
          
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin" aria-expanded="false">
              <span>
                <i class="ti ti-shopping-cart"></i>
              </span>
              <span class="hide-menu">Menu Général</span>
            </a>
          </li>
          <!-- ---------------------------------- -->
          <!-- Front Pages -->
          <!-- ---------------------------------- -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Commandes</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-basket"></i>
              </span>
              <span class="hide-menu">Les commandes</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              {{-- <li class="sidebar-item">
                <a href="main/eco-shop.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Shop</span>
                </a>
              </li> --}}
              {{-- <li class="sidebar-item">
                <a href="main/eco-shop-detail.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Details</span>
                </a>
              </li> --}}
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Liste</span>
                </a>
              </li>
              
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Retour de commande</span>
                </a>
              </li>
              
              {{-- <li class="sidebar-item">
                <a href="main/eco-edit-product.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Edit Product</span>
                </a>
              </li> --}}
            </ul>
          </li>
          <!-- ---------------------------------- -->
          <!-- Apps -->
          <!-- ---------------------------------- -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Gestions</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-basket"></i>
              </span>
              <span class="hide-menu">Articles</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              {{-- <li class="sidebar-item">
                <a href="main/eco-shop.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Shop</span>
                </a>
              </li> --}}
              {{-- <li class="sidebar-item">
                <a href="main/eco-shop-detail.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Details</span>
                </a>
              </li> --}}
              <li class="sidebar-item">
                <a href="{{route('admin.articles.index')}}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Liste</span>
                </a>
              </li>
              
              <li class="sidebar-item">
                <a href="{{route('admin.articles.create')}}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Ajouter</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Gestion du Stock</span>
                </a>
              </li>
              
              {{-- <li class="sidebar-item">
                <a href="main/eco-edit-product.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Edit Product</span>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-basket"></i>
              </span>
              <span class="hide-menu">Fournisseurs</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              {{-- <li class="sidebar-item">
                <a href="main/eco-shop.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Shop</span>
                </a>
              </li> --}}
              {{-- <li class="sidebar-item">
                <a href="main/eco-shop-detail.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Details</span>
                </a>
              </li> --}}
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Liste</span>
                </a>
              </li>
              
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Ajouter</span>
                </a>
              </li>
              
              {{-- <li class="sidebar-item">
                <a href="main/eco-edit-product.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Edit Product</span>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-basket"></i>
              </span>
              <span class="hide-menu">Utilisateurs / <br> Rôle et Permissions</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              {{-- <li class="sidebar-item">
                <a href="main/eco-shop.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Shop</span>
                </a>
              </li> --}}
              {{-- <li class="sidebar-item">
                <a href="main/eco-shop-detail.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Details</span>
                </a>
              </li> --}}
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Utilisateurs</span>
                </a>
              </li>
              
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Rôle et Permissions</span>
                </a>
              </li>
              
              {{-- <li class="sidebar-item">
                <a href="main/eco-edit-product.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Edit Product</span>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('admin.marketing.index')}}" aria-expanded="false">
              <span>
                <i class="ti ti-calendar"></i>
              </span>
              <span class="hide-menu">Marketing et Promotions</span>
            </a>
          </li>
          
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/app-kanban.html" aria-expanded="false">
              <span>
                <i class="ti ti-layout-kanban"></i>
              </span>
              <span class="hide-menu">Kanban</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/app-chat.html" aria-expanded="false">
              <span>
                <i class="ti ti-message-dots"></i>
              </span>
              <span class="hide-menu">Chat</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/app-email.html" aria-expanded="false">
              <span>
                <i class="ti ti-mail"></i>
              </span>
              <span class="hide-menu">Email</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/app-notes.html" aria-expanded="false">
              <span>
                <i class="ti ti-notes"></i>
              </span>
              <span class="hide-menu">Notes</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/app-contact.html" aria-expanded="false">
              <span>
                <i class="ti ti-phone"></i>
              </span>
              <span class="hide-menu">Contact Table</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/app-contact2.html" aria-expanded="false">
              <span>
                <i class="ti ti-list-details"></i>
              </span>
              <span class="hide-menu">Contact List</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/app-invoice.html" aria-expanded="false">
              <span>
                <i class="ti ti-file-text"></i>
              </span>
              <span class="hide-menu">Invoice</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/page-user-profile.html" aria-expanded="false">
              <span>
                <i class="ti ti-user-circle"></i>
              </span>
              <span class="hide-menu">User Profile</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-chart-donut-3"></i>
              </span>
              <span class="hide-menu">Blog</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/blog-posts.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Posts</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/blog-detail.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Details</span>
                </a>
              </li>
            </ul>
          </li> --}}
         
          <!-- ---------------------------------- -->
          <!-- PAGES -->
          <!-- ---------------------------------- -->
          
          
              {{-- <li class="sidebar-item">
                <a href="main/form-input-grid.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Input Grid</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/form-checkbox-radio.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Checkbox & Radios</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/form-bootstrap-switch.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Bootstrap Switch</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/form-select2.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Select2</span>
                </a>
              </li> --}}
            </ul>
          </li>

          <!-- ---------------------------------- -->
          <!-- Form Addons -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-qrcode"></i>
              </span>
              <span class="hide-menu">Form Addons</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/form-dropzone.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Dropzone</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/form-mask.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Form Mask</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/form-typeahead.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Form Typehead</span>
                </a>
              </li>
            </ul>
          </li> --}}

          <!-- ---------------------------------- -->
          <!-- Form Validation -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Form Validation</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/form-bootstrap-validation.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Bootstrap Validation</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/form-custom-validation.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Custom Validation</span>
                </a>
              </li>
            </ul>
          </li> --}}

          <!-- ---------------------------------- -->
          <!-- Form Pickers -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-file-pencil"></i>
              </span>
              <span class="hide-menu">Form Pickers</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/form-picker-colorpicker.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Colorpicker</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/form-picker-bootstrap-rangepicker.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">BT Rangepicker</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/form-picker-bootstrap-datepicker.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">BT Datepicker</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/form-picker-material-datepicker.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">MT Datepicker</span>
                </a>
              </li>
            </ul>
          </li> --}}

          <!-- ---------------------------------- -->
          <!-- Form Editor -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-dna"></i>
              </span>
              <span class="hide-menu">Form Editor</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/form-editor-quill.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Quill Editor</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/form-editor-tinymce.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Tinymce Editor</span>
                </a>
              </li>
            </ul>
          </li> --}}

          <!-- ---------------------------------- -->
          <!-- Form Input -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-basic.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-archive"></i>
              </span>
              <span class="hide-menu">Basic Form</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-vertical.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-box-align-left"></i>
              </span>
              <span class="hide-menu">Form Vertical</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-horizontal.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-box-align-bottom"></i>
              </span>
              <span class="hide-menu">Form Horizontal</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-actions.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-file-export"></i>
              </span>
              <span class="hide-menu">Form Actions</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-row-separator.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-separator-horizontal"></i>
              </span>
              <span class="hide-menu">Row Separator</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-bordered.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-border-outer"></i>
              </span>
              <span class="hide-menu">Form Bordered</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-detail.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-file-description"></i>
              </span>
              <span class="hide-menu">Form Detail</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-striped-row.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-file-analytics"></i>
              </span>
              <span class="hide-menu">Striped Rows</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-floating-input.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-file-dots"></i>
              </span>
              <span class="hide-menu">Form Floating Input</span>
            </a>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- Form Wizard -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-wizard.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-files"></i>
              </span>
              <span class="hide-menu">Form Wizard</span>
            </a>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- Form Repeater -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="main/form-repeater.html" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-topology-star-3"></i>
              </span>
              <span class="hide-menu">Form Repeater</span>
            </a>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- Tables -->
          <!-- ---------------------------------- -->
          {{-- <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Tables</span>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- Bootstrap Table -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-layout-sidebar"></i>
              </span>
              <span class="hide-menu">Bootstrap Table</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/table-basic.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Basic Table</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/table-dark-basic.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Dark Basic Table</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/table-sizing.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Sizing Table</span>
                </a>
              </li>
              <li class="sidebar-item mb-3">
                <a href="main/table-layout-coloured.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Coloured Table</span>
                </a>
              </li>
            </ul>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- Datatable -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-air-conditioning-disabled"></i>
              </span>
              <span class="hide-menu">Datatables</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/table-datatable-basic.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Basic Initialisation</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/table-datatable-api.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">API</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/table-datatable-advanced.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Advanced Initialisation</span>
                </a>
              </li>
            </ul>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- Table Jsgrid -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Charts -->
          <!-- ---------------------------------- -->
          {{-- <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Charts</span>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- Apex Chart -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-chart-pie"></i>
              </span>
              <span class="hide-menu">Apex Charts</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/chart-apex-line.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Line Chart</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/chart-apex-area.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Area Chart</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/chart-apex-bar.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Bar Chart</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/chart-apex-pie.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Pie Chart</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/chart-apex-radial.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Radial Chart</span>
                </a>
              </li>
              <li class="sidebar-item mb-3">
                <a href="main/chart-apex-radar.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Radar Chart</span>
                </a>
              </li>
            </ul>
          </li> --}}

          <!-- ---------------------------------- -->
          <!-- Sample Pages -->
          <!-- ---------------------------------- -->
          {{-- <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Sample Pages</span>
          </li> --}}

          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-file"></i>
              </span>
              <span class="hide-menu">Sample Pages</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/pages-animation.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Animation</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/pages-search-result.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Search Result</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/pages-gallery.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Gallery</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/pages-treeview.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Treeview</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/pages-block-ui.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Block-Ui</span>
                </a>
              </li>
              <li class="sidebar-item mb-3">
                <a href="main/pages-session-timeout.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Session Timeout</span>
                </a>
              </li>
            </ul>
          </li> --}}

          <!-- ---------------------------------- -->
          <!-- Icons -->
          <!-- ---------------------------------- -->
          {{-- <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Icons</span>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- Tabler Icon -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link sidebar-link" href="main/icon-tabler.html" aria-expanded="false">
              <span class="rounded-3">
                <i class="ti ti-archive"></i>
              </span>
              <span class="hide-menu">Tabler Icon</span>
            </a>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- Solar Icon -->
          <!-- ---------------------------------- -->
          {{-- <li class="sidebar-item">
            <a class="sidebar-link sidebar-link" href="main/icon-solar.html" aria-expanded="false">
              <span class="rounded-3">
                <i class="ti ti-mood-smile"></i>
              </span>
              <span class="hide-menu">Solar Icon</span>
            </a>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- AUTH -->
          <!-- ---------------------------------- -->
          {{-- <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">AUTH</span>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link sidebar-link" href="main/authentication-error.html" aria-expanded="false">
              <span class="rounded-3">
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Error</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-login"></i>
              </span>
              <span class="hide-menu">Login</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/authentication-login.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Side Login</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/authentication-login2.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Boxed Login</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-user-plus"></i>
              </span>
              <span class="hide-menu">Register</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/authentication-register.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Side Register</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/authentication-register2.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Boxed Register</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-rotate"></i>
              </span>
              <span class="hide-menu">Forgot Password</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/authentication-forgot-password.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Side Forgot Pwd</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/authentication-forgot-password2.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Boxed Forgot Pwd</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-zoom-code"></i>
              </span>
              <span class="hide-menu">Two Steps</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="main/authentication-two-steps.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Side Two Steps</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="main/authentication-two-steps2.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Boxed Two Steps</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link sidebar-link" href="main/authentication-maintenance.html" aria-expanded="false">
              <span class="rounded-3">
                <i class="ti ti-settings"></i>
              </span>
              <span class="hide-menu">Maintenance</span>
            </a>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- DOCUMENTATION -->
          <!-- ---------------------------------- -->
          {{-- <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">DOCUMENTATION</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link sidebar-link" href="docs/index.html" aria-expanded="false">
              <span class="rounded-3">
                <i class="ti ti-file-text"></i>
              </span>
              <span class="hide-menu">Getting Started</span>
            </a>
          </li> --}}
          <!-- ---------------------------------- -->
          <!-- OTHER -->
          <!-- ---------------------------------- -->
          {{-- <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">OTHER</span>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-box-multiple"></i>
              </span>
              <span class="hide-menu">Menu Level</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="javascript:void(0)" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Level 1</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Level 1.1</span>
                </a>
                <ul aria-expanded="false" class="collapse two-level">
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Level 2</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Level 2.1</span>
                    </a>
                    <ul aria-expanded="false" class="collapse three-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                          </div>
                          <span class="hide-menu">Level 3</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                          </div>
                          <span class="hide-menu">Level 3.1</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link link-disabled" href="index.html#disabled" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-ban"></i>
              </span>
              <span class="hide-menu">Disabled</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="index.html#sub" aria-expanded="false">
              <i class="ti ti-star"></i>
              <div class="hide-menu lh-base">
                <span class="hide-menu d-block">SubCaption</span>
                <span class="hide-menu d-block fs-2">This is the sutitle</span>
              </div>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link justify-content-between" href="index.html#chip" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-award"></i>
                </span>
                <span class="hide-menu">Chip</span>
              </div>
              <div class="hide-menu">
                <span class="badge rounded-circle bg-primary d-flex align-items-center justify-content-center rounded-pill fs-2">9</span>
              </div>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link justify-content-between" href="index.html#outlined" aria-expanded="false">
              <div class="d-flex align-items-center gap-3">
                <span class="d-flex">
                  <i class="ti ti-mood-smile"></i>
                </span>
                <span class="hide-menu">Outlined</span>
              </div>
              <span class="hide-menu badge rounded-pill border border-primary text-primary fs-2 py-1 px-2">Outline</span>
            </a>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="https://google.com" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-star"></i>
              </span>
              <span class="hide-menu">External Link</span>
            </a>
          </li> --}}
        </ul>
      </nav>

      {{-- <div class="fixed-profile px-4 py-9 mx-4 mb-2 bg-primary-subtle rounded mt-7 position-relative">
        <div class="sidebar-footer-text position-relative z-1">
          <h4 class="fw-bolder fs-5">Upgrade to</h4>
          <h4 class="fw-bolder fs-5">Premium</h4>
          <a href="javascript:void(0)" class="btn btn-primary mt-2">Upgrade</a>
        </div>
        <img src="assets/images/backgrounds/sidebar-buynow.png" alt="" class="buynow-img img-fluid position-absolute end-0 bottom-0">
      </div> --}}

      <!-- ---------------------------------- -->
      <!-- Start Vertical Layout Sidebar -->
      <!-- ---------------------------------- -->
    </div>
  </aside>
  <!--  Sidebar End -->