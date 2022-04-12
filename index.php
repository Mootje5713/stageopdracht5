<?php
include "header.php"; 
session_start();

//<table>
    //<tr><th>Taak</th><th>Acties</th></tr>
    //foreach
        //<tr><td class="deleted">beschrijving</td><td><?php if():>ene acties<?php else >andere acties<?php end ></td></tr>
    //endforeach;
//</table>
echo "<table style=width: 100%>";
    if (isset($_SESSION) && isset($_SESSION['todo'])) {
        if (isset($_SESSION['todo']) && count($_SESSION['todo'])) {
            echo "<tr>
            <th>Taak</th>
            <th>Start-datum</th>
            <th>Eind-datum</th>
            <th>Acties</th>
            </tr>";
        }
        foreach ($_SESSION['todo'] as $key => $value):
            if ($value['deleted']) $class = 'deleted';
            else $class = '';
                echo "<td class='$class'>";
                echo $value['taak'] . '<br>' . "</td>";
                echo "<td class='$class'>";
                echo $value['start-datum'] . '<br>' . "</td>";
                echo "<td class='$class'>";
                echo $value['eind-datum'] . '<br>' . "</td>";
            if (!$value['deleted']) {
                ?>
                <td>
                <button onclick="window.location.href='softdelete.php?id=<?php echo $key; ?>'">Verwijder</button>
                <button onclick="window.location.href='update.php?id=<?php echo $key; ?>'">Wijzigen</button>
                </td>
                <?php
            } else {
                ?>
                <td>
                <button onclick="window.location.href='restore.php?id=<?php echo $key; ?>'">Herstel</button>
                <button onclick="if(confirm('Weet je het zeker'))window.location.href='delete.php?id=<?php echo $key; ?>'">Definitief Verwijderen</button>
                </td>
                <?php
            }
            ?>
                </tr>
            <?php 
        endforeach;
    }
echo "</table>";?>

<?php include "footeractions.php"; ?>
<?php include "footer.php"; ?>