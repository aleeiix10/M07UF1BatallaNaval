<?php
echo "<table border : '2px'>";
$n = 10;
$s = 10;

/*$barcos = [
    [[1,1]],[[1,3]],[[1,5]],[[1,7]],
    [[2,1],[2,2]],[[2,4],[2,5]],[[2,7],[2,8]],
    [[3,1],[3,2],[3,3]],[[3,5],[3,6],[3,7]],
    [[4,5],[4,4],[4,6],[4,3]]
];
*/
$barcos = array();

for ($i=0;$i<4;$i++){
    $rand1 = rand(1,9);
    $rand2 = rand(1,9);
    $lista = [[$rand1,$rand2]];
    array_push($barcos,$lista);
}
for ($i=0;$i<3;$i++){
    $rand1 = rand(1,9);
    $rand2 = rand(1,9);
    $lista = [[$rand1,$rand2],[$rand1,$rand2+1]];
    array_push($barcos,$lista);
}
for ($i=0;$i<2;$i++){
    $rand1 = rand(1,9);
    $rand2 = rand(1,9);
    $lista = [[$rand1,$rand2],[$rand1,$rand2+1],[$rand1,$rand2+2]];
    array_push($barcos,$lista);
}
for ($i=0;$i<1;$i++){
    $rand1 = rand(1,9);
    $rand2 = rand(1,9);
    $lista = [[$rand1,$rand2],[$rand1,$rand2+1],[$rand1,$rand2+2],[$rand1,$rand2+3]];
    array_push($barcos,$lista);
}


for($j=0;$j<$s;$j++){
    echo "<tr>\n";
    for($i=0;$i<$n;$i++){
        if (($j==0) && ($i != 0)){
            echo "<td>$i</td>\n";
        }
        elseif (($j!=0) && ($i==0)){
            echo "<td>".chr($j+64)."</td>";
        }
        else{
            $vacio = false;
            foreach($barcos as $x){
                foreach($x as $y){
                    if($j === $y[0] && $i === $y[1]){
                        if (count($x)== 1){
                            $vacio = true;
                            echo "<td style = 'background-color : red'><p>x</p></td>";
                        }
                        elseif (count($x)== 2){
                            $vacio = true;
                            echo "<td style = 'background-color : blue'><p>x</p></td>";
                        }
                        elseif (count($x)== 3){
                            $vacio = true;
                            echo "<td style = 'background-color : green'><p>x</p></td>";
                        }
                        elseif (count($x)== 4){
                            $vacio = true;
                            echo "<td style = 'background-color : purple'><p>x</p></td>";
                        }
                        
                    }
                    
                }
            }
            if ($vacio == false){
                echo "<td></td>\n";
            }

            
        }
    }
    echo "</tr>";
}
echo "</table>";
?>