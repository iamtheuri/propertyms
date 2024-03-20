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

                    <form method="POST" action="/users/authenticate">

                        @csrf

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
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" title="Password must contain at least one uppercase letter, one number, and at least 6 characters long" value="{{old('password')}}">
                                @error('password')
                                <p style="color: brown;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Sign In" class="btn btn-secondary">
                            </div>
                        </div>

                    </form>
                    <p>Don't have an account? <span><a href="/register">Sign Up!</a></span></p>
                    <p>Are you a property Owner? Head on to the <span><a href="/admin/login">Admin Dashboard!</a></span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>