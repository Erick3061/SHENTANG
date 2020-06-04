<?php
    session_start();
    session_destroy();
    ob_end_clean();
    header("location:../../index.php");
?>