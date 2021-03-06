<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Mage2</a>

        </div>
        <div class="col-sm-3 col-md-3 col-sm-offset-2 col-md-offset-0">
            <form class="navbar-form" action="{{ route('search.result') }}" method="get" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                @include('layouts.category-tree',['categories', $categories])

                <li><a href="{{ route('cart.view') }}">Cart ({{$cart}})</a></li>
                <li><a href="{{ route('checkout.index') }}">Checkout</a></li>

                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" title="My Account" class="dropdown-toggle"  data-toggle="dropdown" >
                            {{ Auth::user()->full_name }}
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('my-account.home') }}">My Account</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif

                <li><a href="{{ route('contact-us.get') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>