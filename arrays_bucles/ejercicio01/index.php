<?php

$numero = rand (0,10);

echo "<table>";

for ($i = 0; $i <=10; $i++)
{
    echo "<tr>";
    echo "<td>$numero</td>";
    echo "<td>x</td>";
    echo "<td>$i</td>";
    echo "<td>=</td>";
    echo "<td>".$numero*$i."</td>";
    echo "</tr>";
}

echo"</table>";

?>