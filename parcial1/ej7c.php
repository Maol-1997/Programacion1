<table>
<?php
$cantidad =  (int)(count($_GET)/2);
if($_GET % 2 != 0) {
    for ($i = 0; $i < $cantidad; $i++) {
        echo "<tr>";
        for ($e = 0; $e < $cantidad; $e++) {
            $posicion = $e + $cantidad * $i;
            if (isset($_GET["numero" . $posicion]))
                echo "<td>" . $_GET["numero" . $posicion] . "</td>";
        }
        echo "</tr>";
    }
} else {
    echo "<td>" . array_values(array_slice($_GET, -1))[0] . "</td>";
}
?>
</table>