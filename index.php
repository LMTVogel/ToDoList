<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/6e218605e4.js" crossorigin="anonymous"></script>
    <title>ToDoList</title>
</head>
<body>
    <h1 class="title">Luuk's To Do List <i style="color: #36e336;" class="far fa-check-square"></i></h1>
    
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Lijstnaam</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Vakantie</td>
                    <td>
                        <a class="btn btn-danger float-right" href=""><i class="far fa-trash-alt"></i></a>
                        <a class="btn btn-warning float-right" href=""><i class="far fa-edit"></i></a>
                        <a class="btn btn-watch float-right" href=""><i class="far fa-eye"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>