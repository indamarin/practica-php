<?php



for ($numero = 1; $numero <=10; $numero++)
{
    echo "Tabla del $numero</br>";
    echo "-----------------------------</br>";
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
    echo "---------------------------------</br>";
    
}

?>