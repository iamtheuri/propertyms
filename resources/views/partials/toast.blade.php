@if(session()->has('message'))
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha/js/bootstrap.bundle.min.js"></script>

<div aria-live="polite" aria-atomic="true" style="position: fixed; top: 0; right: 0; z-index: 1000;">
    <div class="toast show" id="notifications" data-delay="5000" style="position: absolute; top: 0; right: 0; min-width: 200px; max-width: 80%; color: #9f654f;">
        <div class="toast-header">
            <img src="{{ asset('image/anonymous.ico') }}" class="rounded mr-2" alt="..." style="max-height: 20px; max-width: 20px;">
            <strong class="mr-auto">Notification</strong>
            <small>now</small>
            <!-- <button type="button" class="ml-2 mb-1 close" data-bs-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> -->
        </div>
        <div class="toast-body">
            {{ session('message') }}
        </div>
    </div>
</div>
@endif