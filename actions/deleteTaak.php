<?php

include '../includes/connect.php';

$taak_id = $_GET['taak_id'];
/* De code zorgt ervoor dat de taak van een specifieke lijst wordt verwijderd */
$sql = "DELETE FROM `taken` WHERE taak_id = :taak_id";
$query = $conn->prepare($sql);
$query->bindParam(":taak_id", $taak_id);
$query->execute();

/* Sluit connectie met de database */
$conn = null;
/* Na de actie wordt de gebruiker doorbegeleid naar vorige pagina */
header('Location: ' . $_SERVER['HTTP_REFERER']);