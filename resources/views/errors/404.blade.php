<!DOCTYPE html>
<html lang="en">

<style>
    .four-o-four {
        background-image: linear-gradient(to right, transparent, grey, black, grey, transparent);
        background-size: cover;
        background-position: center;
        height: 100vh;
    }

    .not-found-text {
        font-weight: bolder;
        font-size: 5rem;
        text-align: center;
        color: white;
    }
</style>

@include('partials.header')

<body class="auth-bg">

    <div class="container four-o-four">
        <h1 class="not-found-text">Oops! <br> Page Not Found<br> 404 <br>
            <a href="/landlord/home" class="btn btn-primary">
                <h1 class="text-light">Go Back</h1>
            </a>
        </h1>
    </div>


    @include('partials.scripts')

</body>

</html>