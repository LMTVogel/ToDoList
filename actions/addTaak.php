<?php
    include "../includes/connect.php";

    $taak_naam = $_POST['taak_naam'];
    $taak_status = $_POST['taak_status'];
    $taak_tijd = $_POST['taak_tijd'];

    $sql = "INSERT INTO `taken` SET taak_naam = :taak_naam, taak_status = :taak_status, taak_tijd = :taak_tijd";
    $query = $conn->prepare($sql);
    $query->bindParam(":taak_naam", $taak_naam);
    $query->bindParam(":taak_status", $taak_status);
    $query->bindParam(":taak_tijd", $taak_tijd);
    $query->execute();

    header('location: ../openLijst.php');