<?php

/* Hier pakt de code alle data uit de table 'lijsten' */
$sql = "SELECT * FROM `lijsten`";
$query = $conn->prepare($sql);
$query->execute();
/* Het resultaat wordt uit de database gefetchd */
$result = $query->fetchAll();