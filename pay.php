<?php 

    if(isset($_POST['checkout'])) {
        require('./config/db.php');

        $card = filter_var($_POST["card_number"], FILTER_SANITIZE_STRING);
        $expiry = filter_var($_POST["expiration_date"], FILTER_SANITIZE_STRING);
        $cvv = filter_var($_POST["cvv"], FILTER_SANITIZE_STRING);

        $stmt = $pdo -> prepare('INSERT INTO card(cardno, Date, cvv) VALUES(?, ?, ?)');
        $stmt -> execute([$card, $expiry, $cvv]);
                header('Location: http://127.0.0.1/classes.php');
    }

?>