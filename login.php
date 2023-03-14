<?php 

    session_start();

    if(isset($_POST['login'])) {
        require('./config/db.php');

        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

        $stmt = $pdo -> prepare('SELECT * from customer WHERE email = ?');
            $stmt -> execute([$email]);
            $user = $stmt -> fetch();

            if(isset($user)) {
                if(password_verify($password, $user -> password)) {
                    echo "The password is correct";
                    $_SESSION['userId'] = $user -> id;
                    header('Location: http://127.0.0.1/classes.php');
                } else {
                    $wrongLogin = "The login password or email is incorrect";
                }
            }
    }

?>