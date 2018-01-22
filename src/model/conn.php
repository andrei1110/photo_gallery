<?php
require_once("../../install/server-configs.php");

try {
  $conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DBNAME.'', DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>