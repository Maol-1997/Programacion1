
<?php
$cantidad =  (count($_GET)/2);
$array = (array_chunk($_GET,ceil($cantidad)));
foreach ($array[0] as $valor){
    echo $valor." ";
}
echo "<br>";
foreach ($array[1] as $valor){
    echo $valor." ";
}
echo "</br>";
?>
</table>