<!-- page loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="assets/js/jquery.steps.min.js"></script>
<script src="assets/js/bd-wizard.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/main.js"></script>

<!-- Custom js -->
<script src="js/form_script.js"></script>
<script src="js/script.js"></script>

<script>
    function playStopAudio(text) {
        var msg = new SpeechSynthesisUtterance(text);
        if (text === 'stop') {
            window.speechSynthesis.cancel();
        } else {
            window.speechSynthesis.speak(msg);
        }
    }

    function displayAlertMsgPhp(msg, type) {
        $(".toast-body").text(msg);
        if (type === true) {
            $(".toast-body").css("color", "green");
        } else {
            $(".toast-body").css("color", "red");
        }
        $(".toast").toast("show");
    } //end alertMsg()
</script>

<?php

if (isset($_GET["msg"])) {
    echo '
        <script>
            displayAlertMsgPhp("' . $_GET["msg"] . '", ' . $_GET["type"] . ');
        </script>
    ';
}

?>

</body>

</html>