
@section('css')
<nav class="main-header navbar navbar-expand navbar-dark navbar-success">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        {{-- <a href="#" class="nav-link">Home</a> --}}
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        {{-- <a href="#" class="nav-link">Contact</a> --}}
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action="{{route('backend.blogs.index')}}">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" name="term"  value="{{ request('term') }}" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
       @role('farmer')
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
            @if(auth()->user()->unreadNotifications->count())
         <span class="badge badge-warning navbar-badge">{{auth()->user()->unreadNotifications->count()}}</span>
           @endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
 @if(auth()->user()->unreadNotifications->count())
          <span class="dropdown-item dropdown-header">
               You have {{auth()->user()->unreadNotifications->count()}} unread Notifications
               <p class="ml-1">
                   <a href="{{url('/markAsRead')}}">Mark All as Read</a>
                  </p>
        </span>
   @endif
          <div class="dropdown-divider"></div>
           @forelse(auth()->user()->unreadNotifications as $notification)
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i>
            {{$notification->data['subject']}}
            <span class="float-right text-muted text-sm">
                 {{$notification->created_at->toDayDateTimeString()}}
                </span>
          </a>
            @empty
                     <p>No Notifications</p>
                 @endforelse
          <div class="dropdown-divider"></div>
             @if(auth()->user()->unreadNotifications->count())
          <a href="{{route('backend.blogs.index')}}" class="dropdown-item dropdown-footer">See All Notifications</a>
           @endif
        </div>
      </li>
    @endrole
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li> --}}
    </ul>
  </nav>
