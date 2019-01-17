<?php

echo "<tr>";
    echo "<th>Aventuras:</th>";
for ($i = 0; $i < count($Games); $i++) {
    echo "<td>" . $Games['Aventuras'][$i] . "</td>";
}
echo "</tr>";

?>