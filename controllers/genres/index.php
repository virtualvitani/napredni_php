<?php

$db = new Database();

dd($db);
try {
    $sql = "SELECT * from zanrovi";
    $genres = $db->query($sql);
} catch (\Exception $e) {
    die("Connection failed: {$exception->getMessage()}");
}

$pageTitle = 'Zanrovi';

require '../views/genres/index.view.php';