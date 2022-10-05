<?php

/** @var $pdo \PDO */
require_once "../../database.php";

$id = $_POST['id'] ?? null;

if (!$id) {
    header('location: index.php');
    exit;
}

$statement = $pdo->prepare('DELETE FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();

header("Location: index.php");
