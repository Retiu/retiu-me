<?php
include("config.php");
include("osekaiDB.php");
function Redirect($url) {
    // redirects by placing js on the page
    // usage: redirect("url");

    echo "<script>
    window.location.href = '" . $url . "';
    </script>";
    exit;
}