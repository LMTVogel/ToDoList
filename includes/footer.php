</body>
<script>
    /* Deze functie dient als validatie van het verwijderen van een lijst en bijbehorende taken */
    function validation() {
        if (!confirm("Weet u zeker dat u de lijst en bijbehorende taken wilt verwijderen?")) {
            return false;
        } else {
            alert("De lijst en bijbehorende taken zijn verwijderd.");
            return true;
        }
    }
    /* Deze functie dient als validatie van het verwijderen van een taak */
    function taakValidation() {
        if (!confirm("Weet u zeker dat u de taak wilt verwijderen?")) {
            return false;
        } else {
            alert("De taak is verwijderd.");
            return true;
        }
    }
</script>
</html>