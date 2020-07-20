        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
        </script>
        <script src="SRC/js/bootstrap.bundle.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js">
        </script>
        <script src="SRC/js/dashboard.js">
        </script>
        <script src="SRC/js/jquery-3.5.1.min.js"></script>
        <script src="SRC/js/jquery-ui-1.12.1/jquery-ui.js"></script>
    </body>
</html>
<script type="text/javascript">
    $('#datepicker').datepicker();
</script>
<script>
    $(document).on("click", 'a[href^="#"]', function(event) {
        event.preventDefault();
            $("html, body").animate(
                {
                  scrollTop: $($.attr(this, "href")).offset().top-40
                },
                'slow'
            );
    });
</script>
<script type="text/javascript">
    var btn = $('#button');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });
</script>