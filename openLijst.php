<?php include "includes/head.php";

    $lijst_id = $_GET['lijst_id'];

    $sql = "SELECT * FROM `lijsten` WHERE lijst_id = :lijst_id";
    $query = $conn->prepare($sql);
    $query->bindParam(":lijst_id", $lijst_id);
    $query->execute();

    $result = $query->fetch();

    $sql1 = "SELECT * FROM `taken` WHERE lijst_id = :lijst_id";
    $query1 = $conn->prepare($sql1);
    $query1->bindParam(":lijst_id", $lijst_id);
    $query1->execute();

    $result1 = $query1->fetchAll();
?>
<div class="container">

    <a href="index.php"><i class="far fa-arrow-alt-circle-left"></i></a>
    <h1 class="title"><?php echo $result['lijst_naam'] ?> <i style="color: #36e336;" class="far fa-check-square"></i></h1>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Taken</th>
                <th scope="col">Status</th>
                <th scope="col">Benodigde tijd</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Looped alle lijsten die in de database zitten
                foreach ($result1 as $row) {
            ?>
                <tr>
                    <td><?php echo $row['taak_naam'] ?></td>
                    <td><?php echo $row['taak_status'] ?></td>
                    <td><?php echo $row['taak_tijd'] ?></td>
                    <td>
                        <a class="btn btn-danger float-right" href="actions/deleteTaak.php?taak_id=<?php echo $row['taak_id'] ?>" onclick="return taakValidation()"><i class="far fa-trash-alt"></i></a>
                        <a class="btn btn-warning float-right" href="editTaak.php?taak_id=<?php echo $row['taak_id'] ?>"><i class="far fa-edit"></i></a>
                        <a class="btn btn-watch float-right" href="openTaak.php?taak_id=<?php echo $row['taak_id'] ?>"><i class="far fa-eye"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="text-center">
        <a class="btn btn-success" href="createTaak.php">Taak toevoegen +</a>
    </div>
</div>

<?php include 'includes/footer.php' ?>