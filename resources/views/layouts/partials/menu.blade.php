<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <img src="{{asset('images/bumdesapp-2.png')}}" width="60" height="46" alt="">
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-title">
            Management
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('category.index')}}">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-drop')}}"></use>
                </svg>
                Categories
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('product.index')}}">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-pencil')}}"></use>
                </svg>
                Products
            </a>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
