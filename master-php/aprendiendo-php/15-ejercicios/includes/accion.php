<?php

echo "<tr>";
    echo "<th>Accion:</th>";
for ($i = 0; $i < count($Games); $i++) {
    echo "<td>" . $Games['Accion'][$i] . "</td>";
}
echo "</tr>";

?>