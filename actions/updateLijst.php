<?php

include '../includes/connect.php';

$lijst_id = $_GET['lijst_id'];
$lijst_naam = $_POST['nieuwe_lijst_naam'];

$stmt = "UPDATE `lijsten` SET lijst_naam = :lijst_naam WHERE lijst_id = :lijst_id";
$query = $conn->prepare($stmt);
$query->bindParam(':lijst_id', $lijst_id);
$query->bindParam(':lijst_naam', $lijst_naam);
$query->execute();

// Sluit connectie met de database
$conn = null;

header('location: ../index.php');