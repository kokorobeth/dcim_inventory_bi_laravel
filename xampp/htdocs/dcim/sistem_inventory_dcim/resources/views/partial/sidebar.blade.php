<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('admin/index3.html')}}" class="brand-link">
      <img src="{{asset('admin/dist/img/bi.jpg')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Bank Indonesia</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ url('/home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('petugas.index')}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Petugas DC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('vendor.index')}}" class="nav-link">
                  <i class="fas fa-anchor nav-icon"></i>
                  <p>Vendor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ruangan.index')}}" class="nav-link">
                  <i class="fas fa-anchor nav-icon"></i>
                  <p>Ruangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('merk.index')}}" class="nav-link">
                  <i class="fab fa-dev nav-icon"></i>
                  <p>Merk</p>
                </a>
              </li> 
            </ul>
            <li class="nav-item">
              <a href="{{route('perangkat.index')}}" class="nav-link">
                <i class="fas fa-angle-double-up nav-icon"></i>
                <p>Perangkat In</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="{{route('perangkatout.index')}}" class="nav-link">
                <i class="fas fa-angle-double-down nav-icon"></i>
                <p>Perangkat Out</p>
              </a>
            </li> 
            {{-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-angle-double-up nav-icon"></i>
                <p>Perangkat In</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../layout/fixed-footer.html" class="nav-link">
                <i class="fas fa-angle-double-down nav-icon"></i>
                <p>Perangkat Out</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link bg-danger" href="{{route('logout')}}"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="fas fa-door-open nav-icon"></i>
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </li>
        </ul>
      </nav>