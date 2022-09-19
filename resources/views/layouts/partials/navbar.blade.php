<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark position-sticky">
		
			
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="#!" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="{{asset('backend/dist/assets/images/logo.png')}}" alt="" class="logo">
            <img src="{{asset('backend/dist/assets/images/logo-icon.png')}}" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="{{asset('backend/dist/assets/images/user/profile.png')}}" class="img-radius" alt="User-Profile-Image">
                            <span>{{ auth()->user()->name }}</span>
                            <a href="#" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="#" class="dropdown-item"><i class="feather icon-user"></i> View Profile</a></li>
                            <li><a href="#" class="dropdown-item"><i class="fa fa-cog"></i> Settings</a></li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                            </form>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    

</header>