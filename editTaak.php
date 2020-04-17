<?php 

include 'includes/head.php';

$taak_id = $_GET['taak_id'];
/* Hier pakt de code de taak uit de database door middel van de taak_id */
$sql = "SELECT * FROM `taken` WHERE taak_id = :taak_id";
$query = $conn->prepare($sql);
$query->bindParam(":taak_id", $taak_id);
$query->execute();
/* Het resultaat wordt uit de database gefetchd */
$result = $query->fetch();

/* Sluit connectie met de database */
$conn = null;

?>


<h1 class="title">Taak aanpassen <i style="color: #36e336;" class="far fa-check-square"></i></h1>

<div class="container">
    <form action="actions/updateTaak.php?taak_id=<?php echo $result['taak_id'] ?>&lijst_id=<?php echo $result['lijst_id']?>" method="POST">
        <div class="form-group">
            <label for="taak_naam">Taaknaam:</label>
            <input type="text" class="form-control" name="nieuwe_taak_naam" value="<?php echo $result['taak_naam'] ?>">

            <label for="taak_status">Taakstatus:</label>
            <select class="form-control" id="statussen" name="taak_status">
                <option value="nietBegonnen">Niet aan begonnen</option>
                <option value="begonnen">Aan begonnen</option>
                <option value="afgerond">Afgerond</option>
            </select>

            <label for="taak_tijd">Hoeveel minuten heeft u nodig voor deze taak?</label>
            <input type="number" class="form-control" name="taak_tijd" value="<?php echo $result['taak_tijd'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Aanpassen</button>
    </form>
</div>