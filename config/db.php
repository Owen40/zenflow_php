<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'zenflow';

//Set DSN - Database Source Name
$dsn = 'mysql:host=' . $host . '; dbname=' . $dbname;

try {
    //Create a new PDO connection
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

} catch(PDOException $e) {
    echo "connection failed: " . $e->getMessage();
}

?>