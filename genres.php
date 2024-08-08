<?php

require_once 'functions.php';

// $dsn = 'mysql:host=localhost;dbname=videoteka;charset=utf8mb4;user=algebra;password=algebra';
// $username = 'algebra';
//$password = 'algebra';

// $config = require 'config.php';
// $config = [
//    'host' => 'localhost',
//    'dbname' => 'videoteka',
//    'user' => 'algebra',
//    'password' => 'algebra',
//   'charset' => 'utf8mb4'
// ];

// $dsn = "mysql:" . http_build_query($config, '', ';');

// try {
    // $pdo = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    // $pdo = new PDO($dsn, options:[PDO::ATTR_DEFAULT_MODE => PDO::FETCH_ASSOC]);
//    $pdo = new PDO($dsn);
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    $sql = "SELECT * from zanrovi ORDER BY id";

//    $stmt = $pdo->prepare($sql);
//    $stmt->execute();

//    $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);

// } catch (PDOException $e) {
//    die("Connection failed: " . $e->getMessage());
// }

$connection = mysqli_connect('localhost', 'algebra', 'algebra', 'videoteka');
if($connection === false){
    die("Connection failed: ". mysqli_connect_error());
}
$sql = "SELECT * from zanrovi;";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) === 0) {
    die('U bazi podataka nema "zanrova"!');
}

$genres = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($connection);

$pageTitle = 'Zanrovi';
$activePage = 'zanrovi';

require 'genres_view.php';