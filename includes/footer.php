</body>
<script>
        function validation() {
            if (!confirm("Weet u zeker dat u de lijst en bijbehorende taken wilt verwijderen?")) {
                return false;
            } else {
                alert("De lijst en bijbehorende taken zijn verwijderd.");
                return true;
            }
        }

        function taakValidation() {
            if (!confirm("Weet u zeker dat u de taak wilt verwijderen?")) {
                return false;
            } else {
                alert("De taak is verwijderd.");
                return true;
            }
        }
    </script>

<script src="../js/script.js"></script>
</html>