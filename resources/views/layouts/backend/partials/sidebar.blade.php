  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('public/assets/backend/img/logo-white.png') }}" alt="SonicPayments Admin" class="img-fluid">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item has-treeview {{ Request::is('admin/courses*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ Request::is('admin/courses*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
              Course Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.courses') }}" class="nav-link {{ Request::is('admin/courses') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.courses.create') }}" class="nav-link {{ Request::is('admin/courses/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add new course</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::is('admin/payments*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/payments*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
              Payment Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.braintree') }}" class="nav-link {{ Request::is('admin/payments/braintree') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Braintree</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.stripe') }}" class="nav-link {{ Request::is('admin/payments/stripe') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stripe</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.paypal') }}" class="nav-link {{ Request::is('admin/payments/paypal') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PayPal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.settings') }}" class="nav-link {{ Request::is('admin/payments/settings') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Settings</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::is('admin/users*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ Request::is('admin/users*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
              Users Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.users') }}" class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::is('admin/orders*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ Request::is('admin/orders*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
              Orders Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.orders') }}" class="nav-link {{ Request::is('admin/orders') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>