<div class="container-fluid">
    <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
        <svg class="icon icon-lg">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-menu')}}"></use>
        </svg>
    </button>
    <ul class="header-nav d-none d-md-flex">
        <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
    </ul>
    <ul class="header-nav ms-auto">
    </ul>
    <ul class="header-nav ms-3">
        <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md">
                    @if(Auth::user()->avatar != null)
                        <img class="avatar-img rounded-circle" src="{{asset('storage/'.Auth::user()->avatar)}}" alt="{{Auth::user()->email}}" style="width: 100%; height: 100%; object-fit: cover;">
                    @else
                        <img class="avatar-img rounded-circle" src="{{asset('images/18.jpg')}}" alt="user@email.com">
                    @endif
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                    <div class="fw-semibold">
                        Accounts
                    </div>
                </div>
                <a class="dropdown-item" href="{{route('profile.index', Auth::id())}}">
                    <svg class="icon me-2">
                        <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-user')}}"></use>
                    </svg>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        <svg class="icon me-2">
                            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout')}}"></use>
                        </svg>
                        Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</div>
