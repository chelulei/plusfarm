<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src=" {{asset('images/faces/face8.jpg ')}}" alt="profile image">

          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name">Allen Moreno</p>
          <p class="designation">Premium user</p>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">Main Menu</li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Drop Down Menu</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('backend.farms.index') }}">
        <i class="menu-icon typcn typcn-shopping-bag"></i>
        <span class="menu-title">Farm Management</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('backend.produces.index') }}">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">Produce Management</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('backend.produces.index') }}">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">Reports/Analytics </span>
      </a>
    </li>

  </ul>
</nav>