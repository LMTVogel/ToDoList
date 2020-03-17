<?php
    include "../includes/connect.php";

    $taak_naam = $_POST['taak_naam'];
    $taak_status = $_POST['taak_status'];
    $taak_tijd = $_POST['taak_tijd'];
    $lijst_id = $_GET['lijst_id'];

    echo $lijst_id;

    $sql = "INSERT INTO `taken` SET taak_naam = :taak_naam, taak_status = :taak_status, taak_tijd = :taak_tijd, lijst_id = :lijst_id";
    $query = $conn->prepare($sql);
    $query->bindParam(":taak_naam", $taak_naam);
    $query->bindParam(":taak_status", $taak_status);
    $query->bindParam(":taak_tijd", $taak_tijd);
    $query->bindParam(":lijst_id", $lijst_id);
    $query->execute();

    header('location: ../openLijst.php?lijst_id'. $lijst_id);