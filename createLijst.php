<?php include "includes/head.php" ?>

<h1 class="title">Nieuwe lijst aanmaken <i style="color: #36e336;" class="far fa-check-square"></i></h1>

<div class="container">
    <form action="actions/addLijst.php" method="POST">
        <div class="form-group">
            <label for="lijst_naam">Lijstnaam:</label>
            <input type="text" class="form-control" name="lijst_naam">
            <small class="form-text text-muted">Voorbeeld voor een lijstnaam: "Wat te doen om de Death Star te vernietigen".</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Aanmaken</button>
    </form>
</div>

<?php include "includes/footer.php" ?>