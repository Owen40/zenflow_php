<?php 
    session_start();

    if(isset($_SESSION['userId'])) {
        session_destroy();
        header('Location: http://127.0.0.1/index.php');
    }
?>