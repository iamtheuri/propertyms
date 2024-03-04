<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>

    @include('partials.navbar')

    <div class="container" style="padding: 2rem; text-align: center;">
        <h1>WELCOME TO PROPERTY MS</h1>
        <div class="row">
            <div class="col-md">
                <p>Property Owner</p>
                <form method="POST" id="loginForm" name="loginForm" class="loginForm">
                    <div class="col-md">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Sign In" class="btn btn-secondary">
                            <div class="submitting"></div>
                        </div>
                    </div>
                    <p>Don't Have An Account? <span><a href="/register">Sign Up!</a></span></p>
                </form>
            </div>
            <hr>
            <div class="col-md">
                <p>Tenant</p>
                <form method="POST" id="loginForm" name="loginForm" class="loginForm">
                    <div class="col-md">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Sign In" class="btn btn-secondary">
                            <div class="submitting"></div>
                        </div>
                    </div>
                    <p>Don't Have An Account? <span><a href="/register">Sign Up!</a></span></p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>