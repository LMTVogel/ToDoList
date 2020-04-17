<?php 

include '../includes/connect.php';

$lijst_id = $_GET['lijst_id'];
$taak_id = $_GET['taak_id'];
/* De code pakt de lijst_id die verwijderd moet worden */
$sql = "DELETE FROM `lijsten` WHERE lijst_id = :lijst_id";
$query = $conn->prepare($sql);
$query->bindParam(":lijst_id", $lijst_id);
$query->execute();
/* De code pakt de bijbehorende taken van de lijst om die tegerlijtijd te verwijderen */
$sql1 = "DELETE FROM `taken` WHERE lijst_id = :lijst_id";
$query1 = $conn->prepare($sql1);
$query1->bindParam(":lijst_id", $lijst_id);
$query1->execute();

/* Sluit connectie met de database */
$conn = null;
/* Na de actie wordt de gebruiker doorbegeleid naar index.php */
header('location: ../index.php');