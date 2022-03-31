    <?php
    include "header.php"; 
    session_start();
    if (isset($_SESSION) && isset($_SESSION['todo'])) {
        foreach ($_SESSION['todo'] as $key => $value) {
            if ($value['deleted']) echo "<s>";
            echo 'taak:' . '&nbsp' . $value['taak'] . '<br>';
            echo 'start-datum:' . '&nbsp' . $value['start-datum'] . '<br>';
            echo 'eind-datum:' . '&nbsp' . $value['eind-datum'] . '<br>';
            if ($value['deleted']) echo "</s>";
                if (!$value['deleted']) {
                    ?>
                    <button onclick="window.location.href='softdelete.php?id=<?php echo $key; ?>'">Verwijder</button>
                    <button onclick="window.location.href='update.php?id=<?php echo $key; ?>'">Wijzigen</button>
                    <?php
                } else {
                    ?>
                    <button onclick="window.location.href='restore.php?id=<?php echo $key; ?>'">Herstel</button>
                    <button onclick="window.location.href='delete.php?id=<?php echo $key; ?>'">Definitief Verwijderen</button>
                    <?php
                }
                ?>
                <br>
            <?php 
        }   
    }   
    ?>
    <br>
    <button onclick="window.location.href='deleteall.php'">Verwijder alles</button>
    <button onclick="window.location.href='addtask.php'">Voeg een taak toe</button>
    <?php include "footer.php"; ?>