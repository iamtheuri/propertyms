<!DOCTYPE html>
<html lang="en">

<head>
    <title>Property MS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="box-shadow: 0 0 5px #ab7865;">
        <div class="container">
            <a class="navbar-brand" href="/home">Property<span>MS</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                </ul>
                <li class="nav-item" style="list-style-type: none;">
                    <button><a href="/login" target="_blank" class="nav-link" style="
                        color: #9f654f;
                        display: flex;
                        justify-content: center;
                        align-items: center;"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </button>
                </li>
            </div>
        </div>
    </nav>

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