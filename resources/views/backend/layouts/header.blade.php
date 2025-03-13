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
            {{-- <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle mx-0 ms-n1 d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
              <i class="ti ti-align-justified fs-7"></i>
            </a> --}}
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
                            <a href="{{ route('admin.edit.stock.article', $product->id) }}" class="py-6 px-7 d-flex align-items-center dropdown-item">
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
                        <a href="{{ route('admin.stock.index') }}" class="btn btn-outline-primary w-100">Voir tous les produits</a>
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
                        <h5 class="mb-1 fs-4">{{ Auth::user()->name }}</h5> <!-- Nom de l'utilisateur -->
                        <span class="mb-1 d-block">{{ Auth::user()->role ?? 'Gestionnaire' }}</span> <!-- Rôle (ou 'Utilisateur' si le rôle n'existe pas) -->
                        <p class="mb-0 d-flex align-items-center gap-2">
                            <i class="ti ti-mail fs-4"></i> {{ Auth::user()->email }}
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
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                       class="py-8 px-7 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                            <img src="{{ asset('assets/backend/images/svgs/icon-inbox.svg') }}" alt="flexy-img" width="24" height="24" />
                        </span>
                        <div class="w-100 ps-3">
                            <h6 class="mb-0 fs-4 lh-base">Se Déconnecter</h6>
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
            <a href="/" class="text-nowrap nav-link">
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
          <a href="/" class="text-nowrap nav-link">
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

  