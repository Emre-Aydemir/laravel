<header>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('dashboard') }}">Brand</a>
            </div>
            {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
                <ul class="nav navbar-nav navbar-right">
                    <li> <i class="far fa-user"></i> <a href="{{ route('account') }}">Account</a></li>
                    <li> <i class="fas fa-sign-out-alt"></i> <a href="{{ route('logout') }}">Logout</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>