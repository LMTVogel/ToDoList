<?php include "includes/head.php" ?>

<h1 class="title">Nieuwe taak aanmaken <i style="color: #36e336;" class="far fa-check-square"></i></h1>

<div class="container">
    <form action="actions/addTaak.php" method="POST">
        <div class="form-group">
            <label for="taak_naam">Taaknaam:</label>
            <input type="text" class="form-control" name="taak_naam">
            <small class="form-text text-muted">Voorbeeld voor een taaknaam: "Rebellen verzamelen om de Death Star te vernietigen".</small>

            <label for="taak_status">Taakstatus:</label>
            <select class="form-control" id="statussen" name="taak_status">
                <option value="nietBegonnen">Niet aan begonnen</option>
                <option value="begonnen">Aan begonnen</option>
                <option value="afgerond">Afgerond</option>
            </select>
        
            <label for="taak_tijd">Benodigde tijd voor taak:</label>
            <input type="text" class="form-control" name="taak_tijd">
        
        </div>
        
        <button type="submit" class="btn btn-primary">Aanmaken</button>
    </form>
</div>

<?php include "includes/footer.php" ?>