 <!--  Header Start -->
 <header class="topbar">
    <div class="with-vertical"><!-- ---------------------------------- -->
      <!-- Start Vertical Layout Header -->
      <!-- ---------------------------------- -->
      <nav class="navbar navbar-expand-lg p-0">
        <ul class="navbar-nav">
          <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
            <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex">
            <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="ti ti-search"></i>
            </a>
          </li>
        </ul>

       

        
        <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="ti ti-dots fs-7"></i>
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <div class="d-flex align-items-center justify-content-between">
            <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle mx-0 ms-n1 d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
              <i class="ti ti-align-justified fs-7"></i>
            </a>
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
             

            
              <!-- ------------------------------- -->
              <!-- start notification Dropdown -->
              <!-- ------------------------------- -->
              {{-- <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="d-flex align-items-center justify-content-between py-3 px-7">
                    <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                    <span class="badge text-bg-primary rounded-2 px-3 py-1 lh-sm">5 new</span>
                  </div>
                  <div class="message-body" data-simplebar>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">Roman Joined the Team!</h6>
                        <span class="fs-3 d-block text-body-secondary">Congratulate him</span>
                      </div>
                    </a>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">New message</h6>
                        <span class="fs-3 d-block text-body-secondary">Salma sent you new message</span>
                      </div>
                    </a>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-4.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">Bianca sent payment</h6>
                        <span class="fs-3 d-block text-body-secondary">Check your earnings</span>
                      </div>
                    </a>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">Jolly completed tasks</h6>
                        <span class="fs-3 d-block text-body-secondary">Assign her new tasks</span>
                      </div>
                    </a>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-6.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">John received payment</h6>
                        <span class="fs-3 d-block text-body-secondary">$230 deducted from account</span>
                      </div>
                    </a>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-7.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">Roman Joined the Team!</h6>
                        <span class="fs-3 d-block text-body-secondary">Congratulate him</span>
                      </div>
                    </a>
                  </div>
                  <div class="py-6 px-7 mb-1">
                    <button class="btn btn-outline-primary w-100">See All Notifications</button>
                  </div>
                </div>
              </li> --}}
              <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                    <i class="ti ti-bell-ringing"></i>
                    @if($lowStockProducts->isNotEmpty())
                        <div class="notification bg-primary rounded-circle"></div>
                    @endif
                </a>
                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                        <span class="badge text-bg-primary rounded-2 px-3 py-1 lh-sm">{{ $lowStockProducts->count() }} new</span>
                    </div>
                    <div class="message-body" data-simplebar>
                        @forelse($lowStockProducts as $product)
                            <a href="{{ route('admin.articles.edit', $product->id) }}" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                <span class="me-3">
                                  <img src="{{ asset('storage/' . $product->couverture) }}" alt="Couverture" class="rounded-circle"  width="48" height="48" >

                                </span>
                                <div class="w-100">
                                    <h6 class="mb-0 fs-4 lh-base">{{ $product->name }}</h6>
                                    <span class="fs-3 d-block text-body-secondary">Quantité restante : {{ floor($product->quantite) }}</span>
                                </div>
                            </a>
                        @empty
                            <div class="py-6 px-7 text-center">
                                <span class="fs-4">Aucune alerte pour le moment</span>
                            </div>
                        @endforelse
                    </div>
                    <div class="py-6 px-7 mb-1">
                        <a href="#" class="btn btn-outline-primary w-100">Voir tous les produits</a>
                    </div>
                </div>
            </li>
            
              <!-- ------------------------------- -->
              <!-- end notification Dropdown -->
              <!-- ------------------------------- -->

              <!-- ------------------------------- -->
              <!-- start profile Dropdown -->
              <!-- ------------------------------- -->
              <li class="nav-item dropdown">
                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                  <div class="d-flex align-items-center">
                    <div class="user-profile-img">
                      <img src="{{asset('assets/backend/images/profile/user-1.jpg')}}" class="rounded-circle" width="35" height="35" alt="flexy-img" />
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                  <div class="profile-dropdown position-relative" data-simplebar>
                    <div class="py-3 px-7 pb-0">
                      <h5 class="mb-0 fs-5 fw-semibold">Profil utilisateur</h5>
                    </div>
                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                      <img src="{{asset('assets/backend/images/profile/user-1.jpg')}}" class="rounded-circle" width="80" height="80" alt="flexy-img" />
                      <div class="ms-3">
                        <h5 class="mb-1 fs-4">Kodak</h5>
                        <span class="mb-1 d-block">Administrator</span>
                        <p class="mb-0 d-flex align-items-center gap-2">
                          <i class="ti ti-mail fs-4"></i> info@wuras.com
                        </p>
                      </div>
                    </div>
                    <div class="message-body">
                      <a href="#" class="py-8 px-7 mt-8 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                          <img src="{{asset('assets/backend/images/svgs/icon-account.svg')}}" alt="flexy-img" width="24" height="24" />
                        </span>
                        <div class="w-100 ps-3">
                          <h6 class="mb-0 fs-4 lh-base">Mon profil</h6>
                          <span class="fs-3 d-block text-body-secondary">Paramètres du compte</span>
                        </div>
                      </a>
                      <a href="#" class="py-8 px-7 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                          <img src="{{asset('assets/backend/images/svgs/icon-inbox.svg')}}" alt="flexy-img" width="24" height="24" />
                        </span>
                        <div class="w-100 ps-3">
                          <h6 class="mb-0 fs-4 lh-base">Ma boîte de réception</h6>
                          <span class="fs-3 d-block text-body-secondary">Messages & Emails</span>
                        </div>
                      </a>
                      
                    </div>
                    
                  </div>
                </div>
              </li>
              <!-- ------------------------------- -->
              <!-- end profile Dropdown -->
              <!-- ------------------------------- -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- ---------------------------------- -->
      <!-- End Vertical Layout Header -->
      <!-- ---------------------------------- -->

      <!-- ------------------------------- -->
      <!-- apps Dropdown in Small screen -->
      <!-- ------------------------------- -->
      <!--  Mobilenavbar -->
      <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
        <nav class="sidebar-nav scroll-sidebar">
          <div class="offcanvas-header justify-content-between">
            <img src="assets/backend/images/logos/favicon.png" alt="flexy-img" class="img-fluid" />
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body h-n80" data-simplebar="" data-simplebar>
            <ul id="sidebarnav">
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <i class="ti ti-apps"></i>
                  </span>
                  <span class="hide-menu">Apps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level my-3">
                  <li class="sidebar-item py-2">
                    <a href="main/app-chat.html" class="d-flex align-items-center">
                      <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="assets/backend/images/svgs/icon-dd-chat.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                      </div>
                      <div>
                        <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                        <span class="fs-2 d-block text-muted">New messages arrived</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="main/app-invoice.html" class="d-flex align-items-center">
                      <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="assets/backend/images/svgs/icon-dd-invoice.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                      </div>
                      <div>
                        <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                        <span class="fs-2 d-block text-muted">Get latest invoice</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="https://bootstrapdemos.wrappixel.com/flexy/dist/main/app-cotact.html" class="d-flex align-items-center">
                      <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="assets/backend/images/svgs/icon-dd-mobile.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                      </div>
                      <div>
                        <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                        <span class="fs-2 d-block text-muted">2 Unsaved Contacts</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="main/app-email.html" class="d-flex align-items-center">
                      <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="assets/backend/images/svgs/icon-dd-message-box.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                      </div>
                      <div>
                        <h6 class="mb-1 bg-hover-primary">Email App</h6>
                        <span class="fs-2 d-block text-muted">Get new emails</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="main/page-user-profile.html" class="d-flex align-items-center">
                      <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="assets/backend/images/svgs/icon-dd-cart.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                      </div>
                      <div>
                        <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                        <span class="fs-2 d-block text-muted">learn more information</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="main/app-calendar.html" class="d-flex align-items-center">
                      <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="assets/backend/images/svgs/icon-dd-date.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                      </div>
                      <div>
                        <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                        <span class="fs-2 d-block text-muted">Get dates</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="main/app-contact2.html" class="d-flex align-items-center">
                      <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="assets/backend/images/svgs/icon-dd-lifebuoy.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                      </div>
                      <div>
                        <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                        <span class="fs-2 d-block text-muted">Add new contact</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="main/app-notes.html" class="d-flex align-items-center">
                      <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="assets/backend/images/svgs/icon-dd-application.svg" alt="flexy-img" class="img-fluid" width="24" height="24" />
                      </div>
                      <div>
                        <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                        <span class="fs-2 d-block text-muted">To-do and Daily tasks</span>
                      </div>
                    </a>
                  </li>
                  <ul class="px-8 mt-7 mb-4">
                    <li class="sidebar-item mb-3">
                      <h5 class="fs-5 fw-semibold">Quick Links</h5>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="main/page-pricing.html">Pricing Page</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="main/authentication-login.html">Authentication
                        Design</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="main/authentication-register.html">Register Now</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="main/authentication-error.html">404 Error Page</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="main/app-notes.html">Notes App</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="main/page-user-profile.html">User Application</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="main/page-account-settings.html">Account Settings</a>
                    </li>
                  </ul>
                </ul>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="main/app-chat.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-message-dots"></i>
                  </span>
                  <span class="hide-menu">Chat</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="main/app-calendar.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-calendar"></i>
                  </span>
                  <span class="hide-menu">Calendar</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="main/app-email.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-mail"></i>
                  </span>
                  <span class="hide-menu">Email</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="app-header with-horizontal">
      <nav class="navbar navbar-expand-xl container-fluid p-0">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item nav-icon-hover-bg rounded-circle d-flex d-xl-none ms-n2">
            <a class="nav-link sidebartoggler" id="sidebarCollapse" href="javascript:void(0)">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="nav-item d-none d-xl-block">
            <a href="main/index.html" class="text-nowrap nav-link">
              <img src="assets/backend/images/logos/dark-logo.svg" class="dark-logo" alt="flexy-img" />
              <img src="assets/backend/images/logos/light-logo.svg" class="light-logo" alt="flexy-img" />
            </a>
          </li>
          <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-xl-flex">
            <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="ti ti-search"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav quick-links d-none d-xl-flex align-items-center">
         
          <!-- ------------------------------- -->
          <!-- end apps Dropdown -->
          <!-- ------------------------------- -->
         
          
         
        </ul>
        <div class="d-block d-xl-none">
          <a href="main/index.html" class="text-nowrap nav-link">
            <img src="assets/backend/images/logos/dark-logo.svg" width="180" alt="flexy-img" />
          </a>
        </div>
        <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="p-2">
            <i class="ti ti-dots fs-7"></i>
          </span>
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
            <a href="javascript:void(0)" class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
              <i class="ti ti-align-justified fs-7"></i>
            </a>
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
              <!-- ------------------------------- -->
              <!-- start language Dropdown -->
              <!-- ------------------------------- -->
              <li class="nav-item nav-icon-hover-bg rounded-circle">
                <a class="nav-link moon dark-layout" href="javascript:void(0)">
                  <i class="ti ti-moon moon"></i>
                </a>
                <a class="nav-link sun light-layout" href="javascript:void(0)">
                  <i class="ti ti-sun sun"></i>
                </a>
              </li>
              
              

             

              <!-- ------------------------------- -->
              <!-- start notification Dropdown -->
              <!-- ------------------------------- -->
              <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="d-flex align-items-center justify-content-between py-3 px-7">
                    <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                    <span class="badge text-bg-primary rounded-2 px-3 py-1 lh-sm">5 new</span>
                  </div>
                  <div class="message-body" data-simplebar>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">Roman Joined the Team!</h6>
                        <span class="fs-3 d-block text-body-secondary">Congratulate him</span>
                      </div>
                    </a>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">New message</h6>
                        <span class="fs-3 d-block text-body-secondary">Salma sent you new message</span>
                      </div>
                    </a>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-4.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">Bianca sent payment</h6>
                        <span class="fs-3 d-block text-body-secondary">Check your earnings</span>
                      </div>
                    </a>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">Jolly completed tasks</h6>
                        <span class="fs-3 d-block text-body-secondary">Assign her new tasks</span>
                      </div>
                    </a>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-6.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">John received payment</h6>
                        <span class="fs-3 d-block text-body-secondary">$230 deducted from account</span>
                      </div>
                    </a>
                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                      <span class="me-3">
                        <img src="assets/backend/images/profile/user-7.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                      </span>
                      <div class="w-100">
                        <h6 class="mb-0 fs-4 lh-base">Roman Joined the Team!</h6>
                        <span class="fs-3 d-block text-body-secondary">Congratulate him</span>
                      </div>
                    </a>
                  </div>
                  <div class="py-6 px-7 mb-1">
                    <button class="btn btn-outline-primary w-100">Voir toutes les notifications</button>
                  </div>
                </div>
              </li>
              <!-- ------------------------------- -->
              <!-- end notification Dropdown -->
              <!-- ------------------------------- -->

              <!-- ------------------------------- -->
              <!-- start profile Dropdown -->
              <!-- ------------------------------- -->
              <li class="nav-item dropdown">
                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                  <div class="d-flex align-items-center">
                    <div class="user-profile-img">
                      <img src="assets/backend/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="flexy-img" />
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                  <div class="profile-dropdown position-relative" data-simplebar>
                    <div class="py-3 px-7 pb-0">
                      <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                    </div>
                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                      <img src="assets/backend/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="flexy-img" />
                      <div class="ms-3">
                        <h5 class="mb-1 fs-4">Johnathan Doe</h5>
                        <span class="mb-1 d-block">Administrator</span>
                        <p class="mb-0 d-flex align-items-center gap-2">
                          <i class="ti ti-mail fs-4"></i> info@flexy.com
                        </p>
                      </div>
                    </div>
                    <div class="message-body">
                      <a href="main/page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                          <img src="assets/backend/images/svgs/icon-account.svg" alt="flexy-img" width="24" height="24" />
                        </span>
                        <div class="w-100 ps-3">
                          <h6 class="mb-0 fs-4 lh-base">My Profile</h6>
                          <span class="fs-3 d-block text-body-secondary">Account Settings</span>
                        </div>
                      </a>
                      <a href="main/app-email.html" class="py-8 px-7 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                          <img src="assets/backend/images/svgs/icon-inbox.svg" alt="flexy-img" width="24" height="24" />
                        </span>
                        <div class="w-100 ps-3">
                          <h6 class="mb-0 fs-4 lh-base">My Inbox</h6>
                          <span class="fs-3 d-block text-body-secondary">Messages & Emails</span>
                        </div>
                      </a>
                      <a href="main/app-notes.html" class="py-8 px-7 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                          <img src="assets/backend/images/svgs/icon-tasks.svg" alt="flexy-img" width="24" height="24" />
                        </span>
                        <div class="w-100 ps-3">
                          <h6 class="mb-0 fs-4 lh-base">My Task</h6>
                          <span class="fs-3 d-block text-body-secondary">To-do and Daily Tasks</span>
                        </div>
                      </a>
                    </div>
                    <div class="d-grid py-4 px-7 pt-8">
                      <div class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-2 p-4 mb-9">
                        <div class="row">
                          <div class="col-6">
                            <h5 class="fs-4 mb-3 fw-semibold">Unlimited Access</h5>
                            <button class="btn btn-primary">Upgrade</button>
                          </div>
                          <div class="col-6">
                            <div class="m-n4 unlimited-img">
                              <img src="assets/backend/images/backgrounds/unlimited-bg.png" alt="flexy-img" class="w-100" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="main/authentication-login.html" class="btn btn-outline-primary">Log Out</a>
                    </div>
                  </div>
                </div>
              </li>
              <!-- ------------------------------- -->
              <!-- end profile Dropdown -->
              <!-- ------------------------------- -->
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--  Header End -->

  