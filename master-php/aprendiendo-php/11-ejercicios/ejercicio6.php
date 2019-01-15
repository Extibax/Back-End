<?php

for ($firstN=1; $firstN <= 10; $firstN++) { 

    echo "<table border='1'>";
    echo
    "
    <tr>
        <th>Tabla del numero: </th>
        <th>$firstN</th>   
    </tr>
    ";

    for ($secondN=1; $secondN <= 10; $secondN++) {

        echo "
        <tr>
            <td>$firstN x $secondN = </td>
            <td>".$firstN*$secondN."</td>
        </tr>
        ";

    }

    echo "</table>";

}