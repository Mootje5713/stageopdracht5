<?php 

session_start();

if (isset($_POST['taak']) && isset($_POST['start-datum']) && isset($_POST['eind-datum'])) {
    $array = [
        'taak' => $_POST['taak'], 
        'start-datum' => $_POST['start-datum'], 
        'eind-datum' => $_POST['eind-datum'], 
        'deleted' => ''

    ];
    $_SESSION['todo'][] = $array;
    header("Location: index.php");
}
?>

<?php include "header.php" ?>
<form method="POST">
    <label for="taak">taak</label>
    <input type="text" name="taak">
    <br>
    <label for="start-datum">start-datum</label>
    <input type="date" name="start-datum">
    <br>
    <label for="eind-datum">eind-datum</label>
    <input type="date" name="eind-datum">
    <br>
    <input type="submit" value="Toevoegen">
</form>

<?php include "footer.php" ?>