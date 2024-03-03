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
                <form method="POST" id="ownerForm" name="ownerForm" class="loginForm" action="process_owner_registration.php">
                    <div class="col-md">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Username" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" pattern="^(?=.*[A-Z])(?=.*\d).{8,}$" title="Password must contain at least one uppercase letter, one number, and be at least 8 characters long" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" pattern="^(?=.*[A-Z])(?=.*\d).{8,}$" title="Password must match the first password" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Sign In" class="btn btn-secondary">
                            <div class="submitting"></div>
                        </div>
                    </div>
                    <p>Have An Account? <span><a href="/login">Login!</a></span></p>
                </form>
            </div>
            <div class="col-md">
                <p>Tenant</p>
                <form method="POST" id="tenantForm" name="tenantForm" class="loginForm" action="process_tenant_registration.php">
                    <div class="col-md">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Username" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <!-- Select Apartment -->
                            <select class="form-control" name="apartment" id="apartment" required>
                                <option value="" disabled selected>Select Apartment</option>
                                <option value="apartment1">Apartment 1</option>
                                <option value="apartment2">Apartment 2</option>
                                <option value="apartment3">Apartment 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" pattern="^(?=.*[A-Z])(?=.*\d).{8,}$" title="Password must contain at least one uppercase letter, one number, and be at least 8 characters long" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" pattern="^(?=.*[A-Z])(?=.*\d).{8,}$" title="Password must match the first password" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Sign In" class="btn btn-secondary">
                            <div class="submitting"></div>
                        </div>
                    </div>
                    <p>Have An Account? <span><a href="/login">Login!</a></span></p>
                </form>
            </div>
        </div>

    </div>

    <script>
        document.addEvenetListener('DOMContentLoaded', function() {
            var password = document.getELementById("password");
            var confirm_password = document.getElementById("confirm_password");

            function validatePassword() {
                if (password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords do not match");
                } else {
                    confirm_password.setCustomValidity('');
                }

                password.addEventListener('change', validatePassword);
                confirm_password.addEventListener('keyup', validatePassword);
            }
        });
    </script>

</body>

</html>