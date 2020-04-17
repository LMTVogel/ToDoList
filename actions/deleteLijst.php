<?php 

include '../includes/connect.php';

$lijst_id = $_GET['lijst_id'];
$taak_id = $_GET['taak_id'];

$sql = "DELETE FROM `lijsten` WHERE lijst_id = :lijst_id";
$query = $conn->prepare($sql);
$query->bindParam(":lijst_id", $lijst_id);
$query->execute();

$sql1 = "DELETE FROM `taken` WHERE lijst_id = :lijst_id";
$query1 = $conn->prepare($sql1);
$query1->bindParam(":lijst_id", $lijst_id);
$query1->execute();

// Sluit connectie met de database
$conn = null;

header('location: ../index.php');