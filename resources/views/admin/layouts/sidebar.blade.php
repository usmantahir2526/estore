 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="text-transform: uppercase;">{{ Auth::guard('admin')->user()->name }}</a>
          {{-- <a href="#" class="d-block">{{ucfirst(Auth::user()->name)}}</a> --}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="{{ route('main.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sub.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Sub Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pro.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Product</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/changepassword') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Change Password</p>
                </a>
              </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>