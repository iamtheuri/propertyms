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