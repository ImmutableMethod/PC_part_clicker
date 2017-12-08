<?php
session_start();

if (!isset($_SESSION['userSession'])) {
 header("Location: Login_page.php");
} else if (isset($_SESSION['userSession'])!="") {
 header("Location: new_index.php");
}

if (isset($_GET['logout'])) {
 session_destroy();
 unset($_SESSION['userSession']);
 header("Location: Login_page.php");
}
?>
