<?php
echo "<table border : '2px'>";
$n = 10;
$s = 10;
$submari= [[5,5],[5,4]];
for($j=0; $j<$s;$j++){
    echo "<tr>\n";
    for($i=0;$i<$n;$i++){
        if (($j==0) && ($i != 0)){
            echo "<td>$i</td>\n";
        }
        elseif (($j!=0) && ($i==0)){
            echo "<td>".chr($j+64)."</td>";
        }
        else{
            if (($j == $submari[0][0] && $i == $submari[0][1]) || ($j == $submari[1][0] && $i == $submari[1][1])){
                echo "<td style = 'background-color : red'><p>x</p></td>";
            }
            else{
            echo "<td></td>\n";
        }
        }
    }
    echo "</tr>";
}
echo "</table>";
?>

