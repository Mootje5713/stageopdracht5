    <?php
    include "header.php"; 
    session_start();
    if (isset($_SESSION) && isset($_SESSION['todo'])) {
        foreach ($_SESSION['todo'] as $key => $value) {
            if ($value['deleted']) echo "<s>";
            echo "<th>Taak</th>";
            echo "<td>" . 'Taak:' . '&nbsp' . $value['taak'] . '<br>';
            echo 'start-datum:' . '&nbsp' . $value['start-datum'] . '<br>';
            echo 'eind-datum:' . '&nbsp' . $value['eind-datum'] . '<br>' . "</td>";
            ?>
            <?php
            if ($value['deleted']) echo "</s>";
                if (!$value['deleted']) {
                    ?>
                    <th>Acties</th>
                    <td> 
                    <button onclick="window.location.href='softdelete.php?id=<?php echo $key; ?>'">Verwijder</button>
                    <button onclick="window.location.href='update.php?id=<?php echo $key; ?>'">Wijzigen</button>
                    </td>
                    <?php
                } else {
                    ?>
                    <th>Acties</th>
                    <td>
                    <button onclick="window.location.href='restore.php?id=<?php echo $key; ?>'">Herstel</button>
                    <button onclick="window.location.href='delete.php?id=<?php echo $key; ?>'">Definitief Verwijderen</button>
                    </td>
                    <?php
                }
                ?>
                <br>
            <?php 
            }
        }   
    ?>
    <?php include "footer.php"; ?>