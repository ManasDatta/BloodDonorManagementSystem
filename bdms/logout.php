<?php
session_start();
session_destroy();
header("Location: index.php");
?>

<?php
    if(!isset($_SESSION["usertype"]))
    {
        header("Location: login.php");
    }
?>