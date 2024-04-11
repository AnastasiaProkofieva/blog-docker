<header class="main-header">
    <div class="header-contacts">
        <ul>
            <li><a href="#"> <span>Call :</span> +7(111)123456789</a></li>
            <li><a href="#"> <span>Write :</span> yourmail@domain.com</a></li>
            @auth
            <li><a href="#"> <span>Write :</span> {{auth()->user()->name}}</a></li>
            @endauth
        </ul>
    </div>
    <a class="logo-holder" href="{{route('posts.index')}}"><img src="{{asset('images/logo.png')}}" alt=""></a>
    <!-- search button-->
    <div class="show-sibedar vissidebar"></div>
    <!-- search button end -->
    <!-- sidebar-button -->
    <div class="sidebar-button-wrap vis-m"></div>
    <!-- sidebar-button end-->
    <!-- search button-->
    <div class="show-search show-fixed-search vissearch"><i class="fa fa-search"></i></div>
    <!-- search button end -->
    <!-- mobile nav -->
    <div class="nav-button-wrap">
        <div class="nav-button vis-main-menu"><span></span><span></span><span></span></div>
    </div>
    <!-- mobile nav end-->
    <!--  navigation -->
    <div class="nav-holder">
        <nav>
            <ul>
                <li>
                    <a href="{{route('posts.index')}}">BLOG </a>
                    <!--second level -->
                </li>
                @auth
                <li>
                    <a href="{{route('posts.create')}}">CREATE POST</a>
                    <!--second level -->

                </li>
                @endauth
                @guest
                    <li>
                        <a href="{{route('register')}}">REGISTER</a>
                        <!--second level -->

                    </li>
                    <li>
                        <a href="{{route('login')}}">lOGIN</a>
                        <!--second level -->

                    </li>
                @endguest
                @auth
                    <li>
                        <a onclick="document.querySelector('#logout').submit()" style="cursor: pointer">lOGOUT</a>
                        <!--second level -->

                    </li>
                @endauth
            </ul>
        </nav>
    </div>
    <!-- navigation  end -->
    <form action="{{route('logout')}}" method="post" id="logout">
        @csrf
    </form>


</header>
