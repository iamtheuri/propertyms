<!DOCTYPE html>
<html lang="en">
@include('partials.header')

<body>

    @include('partials.navbar')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm">
                <div style="padding: 2rem; text-align: center;">
                    <h1>WELCOME TO PROPERTY MS</h1>
                    <form method="POST" action="/users">
                        @csrf
                        <div class="col-md">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter Username" value="{{old('name')}}">
                                @error('name')
                                <p style="color: brown;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter your Email" value="{{old('email')}}">
                                @error('email')
                                <p style="color: brown;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <input class="form-control" name="phone" placeholder="Phone Number" title="Minimum 10 eg. 0712345678" value="{{old('phone')}}">
                                @error('phone')
                                <p style="color: brown;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <select class="form-control" name="role" id="role" value="{{old('role')}}">
                                    <option value="" disabled selected>Select Role</option>
                                    <option value="landlord">Property Owner</option>
                                    <option value="tenant">Tenant</option>
                                </select>
                                @error('role')
                                <p style="color: brown;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md" id="apartment-field" style="display: none;">
                            <div class="form-group">
                                <select class="form-control" name="apartment" value="{{old('apartment')}}">
                                    <option value="" disabled selected>Select Apartment</option>
                                    <option value="apartment1">Apartment 1</option>
                                    <option value="apartment2">Apartment 2</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('apartment')
                                <p style="color: brown;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" title="Password must contain at least one uppercase letter, one number, and at least 6 characters long" value="{{old('password')}}">
                                @error('password')
                                <p style="color: brown;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" title="Password must match the first password" value="{{old('password_confirmation')}}">
                                @error('password_confirmation')
                                <p style="color: brown;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Sign Up" class="btn btn-secondary">
                            </div>
                        </div>
                    </form>
                    <p>Already have an account? <span><a href="/login">Login!</a></span></p>
                </div>
            </div>
        </div>
    </div>

    // Allow Tenants to select apartment
    <script>
        document.getElementById('role').addEventListener('change', function() {
            var role = this.value;
            if (role === 'tenant') {
                document.getElementById('apartment-field').style.display = 'block';
            } else {
                document.getElementById('apartment-field').style.display = 'none';
            }
        });
    </script>

    @include('partials.scripts')


</body>

</html>