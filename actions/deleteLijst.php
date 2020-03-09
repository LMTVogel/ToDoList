<?php 

    include '../includes/connect.php';

    $lijst_id = $_GET['lijst_id'];

    $sql = "DELETE FROM `lijsten` WHERE lijst_id = :lijst_id";
    $query = $conn->prepare($sql);
    $query->bindParam(":lijst_id", $lijst_id);
    $query->execute();

    header('location: ../index.php');