<?php

include "../includes/connect.php";

$lijst_naam = $_POST['lijst_naam'];

$sql = "INSERT INTO `lijsten` SET lijst_naam = :lijst_naam";
$query = $conn->prepare($sql);
$query->bindParam(":lijst_naam", $lijst_naam);
$query->execute();

// Sluit connectie met de database
$conn = null;

header('location: ../index.php');