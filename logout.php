<?php

 session_start();
 
 if (isset($_SESSION['ses_userid'])){
    $_SESSION = array();
    session_destroy();
 }

 header('Location: main.php');
?>