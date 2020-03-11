<?php include "includes/head.php" ?>

<i class="far fa-arrow-alt-circle-left"></i>
<h1 class="title">Nieuwe taak aanmaken <i style="color: #36e336;" class="far fa-check-square"></i></h1>

<div class="container">
    <form action="actions/addTaak.php" method="POST">
        <div class="form-group">
            <label for="taak-naam">Taaknaam:</label>
            <input type="text" class="form-control" name="taak_naam">
            <small class="form-text text-muted">Voorbeeld voor een taaknaam: "Rebellen verzamelen om de Death Star te vernietigen".</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Aanmaken</button>
    </form>
</div>

<?php include "includes/footer.php" ?>