<?php

include '../includes/connect.php';

$lijst_id = $_GET['lijst_id'];

$taak_id = $_GET['taak_id'];
$taak_naam = $_POST['nieuwe_taak_naam'];
$taak_status = $_POST['taak_status'];
$taak_tijd = $_POST['taak_tijd'];
/* Hier pakt de code de lijsten uit de database door middel van de lijst_id */
$stmt = "UPDATE `taken` SET taak_naam = :taak_naam, taak_status = :taak_status, taak_tijd = :taak_tijd WHERE taak_id = :taak_id";
$query = $conn->prepare($stmt);
$query->bindParam(':taak_id', $taak_id);
$query->bindParam(':taak_naam', $taak_naam);
$query->bindParam(':taak_status', $taak_status);
$query->bindParam(':taak_tijd', $taak_tijd);
$query->execute();

/* Sluit connectie met de database */
$conn = null;
/* Na de actie wordt de gebruiker doorbegeleid naar de openLijst document */
header('location: ../openLijst.php?lijst_id=' . $lijst_id);