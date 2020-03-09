<?php include "includes/head.php" ?>

<h1 class="title">Luuk's To Do List <i style="color: #36e336;" class="far fa-check-square"></i></h1>

<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Lijstnaam</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $validate = "1";
                // Looped alle lijsten die in de database zitten
                if ($validate == "1") {
                    foreach ($result as $row) {
            ?>
                <tr>
                    <td><?php echo $row['lijst_naam'] ?></td>
                    <td>
                        <a class="btn btn-danger float-right" href="actions/deleteLijst.php?lijst_id=<?php echo $row['lijst_id'] ?>" onclick="return validation()"><i class="far fa-trash-alt"></i></a>
                        <a class="btn btn-warning float-right" href=""><i class="far fa-edit"></i></a>
                        <a class="btn btn-watch float-right" href=""><i class="far fa-eye"></i></a>
                    </td>
                </tr>
            <?php }} ?>
        </tbody>
    </table>
    <div class="text-center">
        <a class="btn btn-success" href="createLijst.php">Lijst toevoegen +</a>
    </div>
</div>

<?php include "includes/footer.php" ?>