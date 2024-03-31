<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="box-shadow: 0 0 5px #ab7865;">
    <div class="container">

        @auth
        @if(auth()->user()->role === 'tenant')

        <a class="navbar-brand" href="/tenant/home">Tenant Dashboard</a>

        @elseif(auth()->user()->role === 'landlord')

        <a class="navbar-brand" href="/landlord/home"><span>Landlord</span> Dashboard</a>

        @endif

        @else

        <a class="navbar-brand" href="/">Property<span>MS</span></a>

        @endauth

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">


            @auth

            @if(auth()->user()->role === 'tenant')

            <ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">

                <li class="nav-item active"><a href="/tenant/home" class="nav-link">Welcome {{ explode(' ', trim(auth()->user()->name))[0] }}</a></li>
                <li class="nav-item"><a href="/tenant/maintenance" class="nav-link">Maintenance</a></li>
                <li class="nav-item"><a href="/tenant/financials" class="nav-link">Financials</a></li>
                <li class="nav-item" style="list-style-type: none;">
                    <form class="inline" action="/logout" method="POST">

                        @csrf
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout
                        </button>

                    </form>
                </li>
            </ul>

            @elseif(auth()->user()->role === 'landlord')

            <ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">

                <li class="nav-item active"><a href="/landlord/home" class="nav-link"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp; Welcome {{ explode(' ', trim(auth()->user()->name))[0] }}</a></li>
                <li class="nav-item"><a href="/landlord/properties" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Property</a></li>
                <li class="nav-item"><a href="/landlord/units" class="nav-link"><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp; Units</a></li>
                <li class="nav-item"><a href="/landlord/tenants" class="nav-link"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Tenants</a></li>
                <li class="nav-item"><a href="/landlord/financials" class="nav-link"><i class="fa fa-money" aria-hidden="true"></i>&nbsp; Financials</a></li>
                <li class="nav-item" style="list-style-type: none;">
                    <form class="inline" action="/logout" method="POST">

                        @csrf
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout
                        </button>

                    </form>
                </li>
            </ul>

            @endif

            @else

            <ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">

                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                <li class="nav-item" style="list-style-type: none;">
                    <a href="/login" style="color: white; text-decoration: none;" onmouseover="this.style.color='brown'" onmouseout="this.style.color='white'">
                        <button class="btn btn-primary">
                            <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Login
                        </button>
                    </a>
                </li>

            </ul>

            @endauth

        </div>
    </div>
</nav>