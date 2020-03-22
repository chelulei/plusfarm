<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="{{ Auth::user()->image_url}}" alt="{{ Auth::user()->name }}">
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name">{{ Auth::user()->name }}</p>
          {{-- <p class="designation">Premium user</p> --}}
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">Main Menu</li>
     @role('superadmin')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin') }}">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    @endrole
    @role('farmer')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    @endrole
    @role('superadmin')
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">UserManagement</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.users.index') }}">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.roles.index') }}">Roles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.permissions.index') }}">Permissions</a>
          </li>
        </ul>
      </div>
    </li>
   @endrole
    @role('farmer')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('backend.farms.index') }}">
        <i class="menu-icon typcn typcn-shopping-bag"></i>
        <span class="menu-title">Farm Management</span>
      </a>
    </li>
      @endrole
       @role('farmer')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('backend.produces.index') }}">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">Produce Management</span>
      </a>
    </li>
       @endrole
      @role('superadmin')
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Manage Crops</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic2">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.plants.index') }}">Crops</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.seeds.index') }}">Varieties</a>
          </li>
        </ul>
      </div>
    </li>
      @endrole
       @role('farmer')
       <li class="nav-item">
      <a class="nav-link" href="{{ route('backend.reports.index') }}">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">Reports</span>
      </a>
    </li>
     @endrole
     <li class="nav-item">
      <a class="nav-link" href="{{ route('backend.blogs.index') }}">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">Resources</span>
      </a>
    </li>
  </ul>
</nav>