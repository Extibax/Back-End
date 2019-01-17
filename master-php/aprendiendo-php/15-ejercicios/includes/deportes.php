<?php

echo "<tr>";
    echo "<th>Deportes:</th>";
for ($i = 0; $i < count($Games); $i++) {
    echo "<td>" . $Games['Deportes'][$i] . "</td>";
}
echo "</tr>";

?>