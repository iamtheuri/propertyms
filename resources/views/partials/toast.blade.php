@if(session()->has('message'))
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha/js/bootstrap.bundle.min.js"></script>

<div aria-live="polite" aria-atomic="true" class="mt-2 mr-2" style="position: fixed; top: 0; right: 0; z-index: 1000;">
    <div class="toast show" id="notifications" data-delay="5000" style="position: absolute; top: 0; right: 0; min-width: 200px; max-width: 80%; color: #9f654f; box-shadow: 0 0 3rem #ab7865;">
        <div class="toast-header">
            <img src="{{ asset('image/anonymous.ico') }}" class="rounded mr-2" alt="..." style="max-height: 20px; max-width: 20px;">

            @if(empty(auth()->user()->role))

            <strong class="mr-auto">Property MS</strong>

            @else

            <strong class="mr-auto">{{ ucwords(auth()->user()->role) }}</strong>

            @endif

            <small>now</small>
            <!-- <button type="button" class="ml-2 mb-1 close" data-bs-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> -->
        </div>
        <div class="toast-body">
            {{ session('message') }} <br>
            <small>At: {{now()}}</small>
        </div>
    </div>
</div>
@endif