<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="box-shadow: 0 0 5px #ab7865;">
    <div class="container">

        <a class="navbar-brand" href="/">Property<span>MS</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">

            @auth

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