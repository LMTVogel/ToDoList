<?php

include '../includes/connect.php';

$taak_id = $_GET['taak_id'];

$sql = "DELETE FROM `taken` WHERE taak_id = :taak_id";
$query = $conn->prepare($sql);
$query->bindParam(":taak_id", $taak_id);
$query->execute();

// Sluit connectie met de database
$conn = null;

header('location: ../index.php');