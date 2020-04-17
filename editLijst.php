<?php 

include 'includes/head.php'; 

$lijst_id = $_GET['lijst_id'];
/* Hier pakt de code de lijst uit de database door middel van de lijst_id */
$sql = "SELECT * FROM `lijsten` WHERE lijst_id = :lijst_id";
$query = $conn->prepare($sql);
$query->bindParam(":lijst_id", $lijst_id);
$query->execute();
/* Het resultaat wordt uit de database gefetchd */
$result = $query->fetch();

// Sluit connectie met de database
$conn = null;

?>


<h1 class="title">Lijst aanpassen <i style="color: #36e336;" class="far fa-check-square"></i></h1>

<div class="container">
    <form action="actions/updateLijst.php?lijst_id=<?php echo $result['lijst_id'] ?>" method="POST">
        <div class="form-group">
            <label for="lijst_naam">Pas hier de naam van uw lijst aan</label>
            <input type="text" class="form-control" name="nieuwe_lijst_naam" value="<?php echo $result['lijst_naam'] ?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Aanpassen</button>
    </form>
</div>