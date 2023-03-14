<?php 

    if(isset($_POST['register'])) {
        require('./config/db.php');

        $fname = filter_var($_POST["Fname"], FILTER_SANITIZE_STRING);
        $Lname = filter_var($_POST["Lname"], FILTER_SANITIZE_STRING);
        $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $pwd = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
        $passwordHashed = password_hash($pwd, PASSWORD_DEFAULT);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $stmt = $pdo -> prepare('SELECT * from customer WHERE email = ? ');
            $stmt -> execute([$email]);
            $totalUsers = $stmt -> rowCount();

            // echo $totalUsers . '<br >';
            if( $totalUsers > 0 ) {
                echo "Email is already taken <br>";
            } else {
                $stmt = $pdo -> prepare('INSERT INTO customer(fname, lname, phone, email, password) VALUES(?, ?, ?, ?, ?) ');
                $stmt -> execute([$fname, $Lname, $phone, $email, $passwordHashed]);
                header('Location: http://127.0.0.1/payment.html');
            }
        }
    }

?>