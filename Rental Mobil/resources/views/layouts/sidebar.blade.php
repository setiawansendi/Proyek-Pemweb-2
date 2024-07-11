<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/img/avatar.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rental Mobil Cogan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('profile.edit')}}" class="d-block">
            @auth
            {{ strtoupper(Auth::user()->name) }} 
            @endauth
          </a>
          <span class='text-primary'> Role : {{ Auth::user()->role }}</span>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="{{url('armada/index')}}" class="nav-link">
              <i class="nav-icon fas fa-concierge-bell"></i>
              <p>
                Armada
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('jenis_kendaraan/index')}}" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Jenis Kendaraan
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('peminjaman/index')}}" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Peminjaman
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('pembayaran/index')}}" class="nav-link">
              <i class="nav-icon fas fa-toolbox"></i>
              <p>
                Pembayaran
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
       </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
