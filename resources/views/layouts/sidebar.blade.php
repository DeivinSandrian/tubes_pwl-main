<<<<<<< HEAD
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <!-- <img src="{{ asset('corona/images/faces/face1.jpg') }}" alt="profile">
                    <span class="login-status online"></span> -->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::user()->nama }}</span>
                    <span class="text-secondary text-small">{{ ucfirst(Auth::user()->role) }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route(Auth::user()->role . '.dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route(Auth::user()->role . '.letters') }}">
                <span class="menu-title">Letters</span>
                <i class="mdi mdi-email menu-icon"></i>
            </a>
        </li>
        @if (Auth::user()->role === 'mahasiswa')
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#create-letter-menu" aria-expanded="false" aria-controls="create-letter-menu">
                    <span class="menu-title">Create Letter Request</span>
                    <i class="mdi mdi-plus menu-icon"></i>
                </a>
                <div class="collapse" id="create-letter-menu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mahasiswa.letters.create', 'SKMA') }}">Surat Keterangan Mahasiswa Aktif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mahasiswa.letters.create', 'SKT') }}">Surat Keterangan Lulus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mahasiswa.letters.create', 'SPTMK') }}">Surat Pengantar Tugas Mata Kuliah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mahasiswa.letters.create', 'LHS') }}">Laporan Hasil Studi</a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="menu-title">Logout</span>
                <i class="mdi mdi-logout menu-icon"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>

<style>
    /* Initially show the full logo and hide the mini logo */
    .sidebar .nav-item.nav-profile .nav-link .nav-profile-text .brand-logo {
        display: block;
    }

    .sidebar .nav-item.nav-profile .nav-link .nav-profile-text .brand-logo-mini {
        display: none;
    }

    /* When the sidebar is minimized, hide the full logo and show the mini logo */
    body.sidebar-icon-only .sidebar .nav-item.nav-profile .nav-link .nav-profile-text .brand-logo {
        display: none;
    }

    body.sidebar-icon-only .sidebar .nav-item.nav-profile .nav-link .nav-profile-text .brand-logo-mini {
        display: block;
    }

    /* Basic styling for alignment */
    .sidebar .nav-item.nav-profile .nav-link {
        display: flex;
        justify-content: center;
        padding: 1rem 0;
    }

    .sidebar .nav-item.nav-profile .nav-link .nav-profile-text {
        align-items: center;
    }

    /* Dropdown submenu styling */
    .sidebar .nav .sub-menu {
        padding-left: 20px;
    }

    .sidebar .nav .sub-menu .nav-link {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
    }
</style>
=======
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Form Elements</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
