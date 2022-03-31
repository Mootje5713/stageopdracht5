<?php 

session_start();

if (isset($_POST['taak']) && isset($_POST['start-datum']) && isset($_POST['start-datum'])) {
    $_SESSION['todo'][$_GET['id']]['taak'] = $_POST['taak'];
    $_SESSION['todo'][$_GET['id']]['start-datum'] = $_POST['start-datum'];
    $_SESSION['todo'][$_GET['id']]['eind-datum'] = $_POST['eind-datum'];

    header("Location: index.php");
}

?>

<?php include "header.php" ?>

<form method="POST">
    <label for="taak">taak</label>
    <input type="text" name="taak" value="<?php echo $_SESSION['todo'][$_GET['id']]['taak'];?>">
    <br>
    <label for="start-datum">start-datum</label>
    <input type="date" name="datum" value="<?php echo $_SESSION['todo'][$_GET['id']]['start-datum'];?>">
    <br>
    <label for="eind-datum">eind-datum</label>
    <input type="date" name="eind-datum" value="<?php echo $_SESSION['todo'][$_GET['id']]['eind-datum'];?>">
    <br>
    <input type="submit" value="Wijzig">
</form>

<?php include "footer.php" ?>