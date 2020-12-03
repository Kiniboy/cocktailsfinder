<!-- Footer -->
<footer class="page-footer font-small blue fixed-bottom">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="http://www.cesi.fr"> Site réalisé dans le cadre de la formation RIL 2019</a>
    </div>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $('.navTrigger').click(function () {
        $(this).toggleClass('active');
        console.log("Clicked menu");
        $("#" +
            "").toggleClass("show_list");
        $("#mainListDiv").fadeIn();
    });
</script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>
    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            $('.nav').addClass('affix');
            console.log("OK");
        } else {
            $('.nav').removeClass('affix');
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</html>