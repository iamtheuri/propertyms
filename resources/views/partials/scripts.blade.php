<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>

<script>
    $(document).ready(function() {
        $(".nav-item").on("click", function() {
            $(".nav-item").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>

<script>
    $(document).ready(function() {
        var notificationsEl = document.getElementById('notifications');
        var notifications = new bootstrap.Toast(notificationsEl);
        notifications.show();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.date').datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });
</script>