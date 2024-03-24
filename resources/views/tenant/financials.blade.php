<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')


    <div class="card m-4">
        <div class="card-body">
            <h1>Payment details for {{auth()->user()->name}}</h1>
            <h5>Balance due is {{('KES 8000')}}</h5>
            <p>No payment details Provided.
            </p>
            <a href="/tenant/home/#tenant-owner-details">Contact Your manager for details</a>

        </div>
    </div>


    @include('partials.scripts')

</body>

</html>