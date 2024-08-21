<?php

// MVC pattern -> Model - View - Controller

$db = new Database();

try {
    $sql = "SELECT * FROM clanovi";
    $members = $db->query($sql);
} catch (\Exception $exception) {
    die("Connection failed: {$exception->getMessage()}");
}

require '../views/members.view.php';