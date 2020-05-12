<?php

include "../includes/connect.php";

$lijst_naam = $_POST['lijst_naam'];
/* De code zorgt ervoor dat er een lijst wordt aangemaakt */
$sql = "INSERT INTO `lijsten` SET lijst_naam = :lijst_naam";
$query = $conn->prepare($sql);
$query->bindParam(":lijst_naam", $lijst_naam);
$query->execute();

/* Sluit connectie met de database */
$conn = null;

/* Na de actie wordt de gebruiker doorbegeleid naar index.php */

header('location: ../index.php');
