<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-success">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('/images/icons/pluslogo.png')}}"
           alt="Plusfarm"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Plusfarm</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->image_url}}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">

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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Profile Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.account.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Profile</p>
                </a>
              </li>
              <li class="nav-item">
                   <?php $user = Auth::user(); ?>
                <a href="{{ route('profile-edit', ['user' => $user]) }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Edit Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}"   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Sign Out</p>
                </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
              </li>
            </ul>
          </li>
          <li class="nav-item">
             @role('superadmin')
             <a href="{{ route('admin') }}" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
                 @endrole
                  @role('farmer')
          <a href="{{ route('home') }}" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
                    @endrole
          </li>
            @role('superadmin')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
             UserManagement
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('backend.users.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.roles.index') }}l" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.permissions.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permissions</p>
                </a>
              </li>
            </ul>
          </li>
           @endrole
           @role('farmer')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('backend.farms.index') }}">
       <i class="far fa-circle nav-icon"></i>
        <span class="menu-title">Farm Management</span>
      </a>
    </li>
      @endrole
       @role('farmer')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('backend.produces.index') }}">
       <i class="far fa-circle nav-icon"></i>
        <span class="menu-title">Produce Management</span>
      </a>
    </li>
       @endrole
          @role('superadmin')
       <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
            Manage Crops
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('backend.plants.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crops</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.seeds.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Varieties</p>
                </a>
              </li>
            </ul>
          </li>
            @endrole
            <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.blogs.index') }}">
             <i class="far fa-circle nav-icon"></i>
              <span class="menu-title">Resources</span>
            </a>
         </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
