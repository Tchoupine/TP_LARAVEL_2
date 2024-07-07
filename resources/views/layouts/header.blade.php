

<header class="header">
    <div class="container">
    <nav class="navbar navbar-expand-lg header-nav p-0">
    <div class="navbar-header">
    <a id="mobile_btn" href="javascript:void(0);">
    <span class="bar-icon">
    <span></span>
    <span></span>
    <span></span>
    </span>
    </a>
    <a href="{{route ('home')}}" class="navbar-brand logo">
    <img src="../assets/img/logo.svg" class="img-fluid" alt="Logo">
    </a>
    </div>
    <div class="main-menu-wrapper">
    <div class="menu-header">
    <a href="{{route ('home')}}" class="menu-logo">
    <img src="../assets/img/logo.svg" class="img-fluid" alt="Logo">
    </a>
    <a id="menu_close" class="menu-close" href="javascript:void(0);">
    <i class="fas fa-times"></i>
    </a>
    </div>
    <ul class="main-nav">
        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="{{ request()->routeIs('table') ? 'active' : '' }}">
            <a href="{{ route('table') }}">Freelancer</a>
        </li>
        
    </ul>
    
    </div>
   
    </ul>
    </nav>
    </div>
</header>
