<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo">
      <img src="{{asset('/images/icons/pluslogo.svg')}}" alt="Plusfarm" width="30" height="30"/> </a>
    <a class="navbar-brand brand-logo-mini">
    <img src="{{asset('/images/icons/pluslogo.svg')}}" alt="Plusfarm" width="30" height="30"/> </a>
   </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav">
      {{-- <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li> --}}
      <li class="nav-item dropdown language-dropdown">
        {{-- <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> --}}
          <div class="d-inline-flex mr-0 mr-md-3">
            <div class="flag-icon-holder">
              {{-- <i class="flag-icon flag-icon-us"></i> --}}
            </div>
          </div>
          {{-- <span class="profile-text font-weight-medium d-none d-md-block">English</span> --}}
        </a>
        <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
          <a class="dropdown-item">
            <div class="flag-icon-holder">
              <i class="flag-icon flag-icon-us"></i>
            </div>English
          </a>
          <a class="dropdown-item">
            <div class="flag-icon-holder">
              <i class="flag-icon flag-icon-fr"></i>
            </div>French
          </a>
          <a class="dropdown-item">
            <div class="flag-icon-holder">
              <i class="flag-icon flag-icon-ae"></i>
            </div>Arabic
          </a>
          <a class="dropdown-item">
            <div class="flag-icon-holder">
              <i class="flag-icon flag-icon-ru"></i>
            </div>Russian
          </a>
        </div>
      </li>
    </ul>
    <form class="ml-auto search-form d-none d-md-block" action="{{ route('backend.blogs.index') }}">
      <div class="form-group">
        <input type="search" name="term"  class="form-control"  value="{{ request('term') }}"
        placeholder="Search Here">
      </div>
    </form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <i class="mdi mdi-bell-outline"></i>
            @if(auth()->user()->unreadNotifications->count())
          <span class="count">{{auth()->user()->unreadNotifications->count()}}</span>
           @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
          <a class="dropdown-item py-3">
            @if(auth()->user()->unreadNotifications->count())
            <p class="mb-0 font-weight-medium float-left">
              You have {{auth()->user()->unreadNotifications->count()}} unread Notifications</p>
                   <a href="{{route('backend.blogs.index')}}">
                     <span class="badge badge-pill badge-primary float-right">
                     View all
                     </span>
                    </a>
               <p class="ml-1">
                   <a href="{{url('/markAsRead')}}">Mark All as Read</a>
                  </p>
               @endif
           </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              {{-- <img src="assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div> --}}
              <div class="preview-item-content flex-grow py-2">
             @forelse(auth()->user()->unreadNotifications as $notification)
              <p class="preview-subject ellipsis font-weight-medium text-dark">
                From {{$notification->data['user']}}
              </p>
              <p class="font-weight-light small-text">
                {{$notification->data['subject']}}
              </p>
                <p class="font-weight-light small-text">
                {{$notification->data['title']}}
              </p>
              {{$notification->created_at->toDayDateTimeString()}}</span>
                 @empty
                     <p>No Notifications</p>
                 @endforelse
            </div>

          </a>
        </div>
      </li>

      <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <img class="img-xs rounded-circle" src="{{ Auth::user()->image_url}}" alt="{{ Auth::user()->name }}"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="{{ Auth::user()->image_url}}" alt="{{ Auth::user()->name }}">
            <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
            <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email }}</p>
          </div>
          <a   href="{{route('backend.account.index')}}" class="dropdown-item">My Profile <i class="dropdown-item-icon ti-dashboard"></i></a>
             <?php $user = Auth::user(); ?>
           <a href="{{ route('profile-edit', ['user' => $user]) }}" class="dropdown-item">
               Edit Password
               <i class="dropdown-item-icon ti-comment-alt"></i></a>
          <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Sign Out
            <i class="dropdown-item-icon ti-power-off"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
