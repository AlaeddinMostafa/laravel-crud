<header id="header-app">
    <nav class="container">
        <div class="row">
            <div class="col-xl-1 col-lg-1 navbar-brand my-3">
                <a href="{{ route('index') }}" class="navbar-brand">Weblog</a>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12" id="right-navigation">
                <ul class="my-2">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 btn-group" id="left-navigation" dir="ltr">
                @auth
                <a href="{{ route('home') }}">Dashboard</a>
                <form method="post" action="{{ route('logout') }}" role="form">
                @csrf
                    <button type="submit" name="logout" class="btn btn-warning btn-md me-auto ms-auto">Logout</button>    
                </form>                
                @endauth

                @guest
                <a href="{{ route('register') }}">Register</a>
                <a href="{{ route('login') }}">Login</a>
                @endguest
            </div>
        </div>
    </nav>
</header>
