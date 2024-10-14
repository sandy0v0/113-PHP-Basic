<?php
$n=50;
echo "n=" .$n. "<br>";
for($i=1;$i<=$n;$i=$i+2){
    echo $i;
    echo ",";

}
echo "<br>";

$n=50;
echo "n=" .$n. "<br>";
for($i=1;$i<=$n;$i++){
    echo $i *10 ;
    echo ",";

}

echo "<br>";

$n=100;
echo "n=" .$n. "<br>";
$count=0;
for($i=4;$i<=$n;$i++){
    $t=true;
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            /* $i 如果可以被任一個$n-1的數整除的話,那$i 就不是質數; */
            //echo "$i 不是質數<br>";
            $t=false;
        }
        $count++;
    }

    if($t=true){
        echo "$i ,";
    }

}
echo "<br>";
echo $count;

echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;
for($i=4;$i<=$n;$i++){
    $t=true;     
    for($j=2;$j<ceil($i/2);$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }

    if($t==true){
        echo "$i ,";
    }

}
echo "<br>";
echo $count;



echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;
for($i=4;$i<=$n;$i++){
    $t=true;     
    for($j=2;$j<=sqrt($i);$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }

    if($t==true){
        echo "$i ,";
    }

}
echo $count;
echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;
for($i=3;$i<=$n;$i=$i+2){
    $t=true;     
    for($j=2;$j<=ceil(sqrt($i));$j++){
        if($i%$j==0){
            $t=false;
            break;
        }
        $count++;
    }

    if($t==true){
        echo "$i ,";
    }

}
echo "<br>";
echo $count;


?>
<h2>九九乘法表</h2>
<?php
//A*B=C
// trbel>tr*3>td*3

/* 
for($i=1;$i<=9;$i++){
    echo "1 X $i = ".(1*$i);    
    echo "<br>";
}
for($i=1;$i<=9;$i++){
    echo "2 X $i = ".(2*$i);    
    echo "<br>";
}
for($i=1;$i<=9;$i++){
    echo "3 X $i = ".(3*$i);    
    echo "<br>";
}
for($i=1;$i<=9;$i++){
    echo "4 X $i = ".(4*$i);    
    echo "<br>";
}
for($i=1;$i<=9;$i++){
    echo "5 X $i = ".(5*$i);    
    echo "<br>";
}
for($i=1;$i<=9;$i++){
    echo "6 X $i = ".(6*$i);    
    echo "<br>";
}
for($i=1;$i<=9;$i++){
    echo "7 X $i = ".(7*$i);    
    echo "<br>";
}
for($i=1;$i<=9;$i++){
    echo "8 X $i = ".(8*$i);    
    echo "<br>";
}
for($i=1;$i<=9;$i++){
    echo "9 X $i = ".(9*$i);    
    echo "<br>";
}
 */

for($j=1;$j<=9;$j++){
    for($i=1;$i<=9;$i++){
        echo "$j x $i = " .($j*$i);
        echo " , ";

    }
    echo "<br>";
}

echo "<table border=1>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo "$j x $i = " .($j*$i);
        echo "</td>\n";

    }
    echo "</tr>";
}
echo "</table>";



?>
<?php
//我是第一版
echo "<table border=1>";
echo "<tr>";
for($k=0;$k<10;$k++){
    echo "<td>$k</td>";
}

/* echo "<td></td>";
echo "<td>1</td>";
echo "<td>2</td>";
echo "<td>3</td>";
echo "<td>4</td>";
echo "<td>5</td>";
echo "<td>6</td>";
echo "<td>7</td>";
echo "<td>8</td>";
echo "<td>9</td>"; */
echo "<tr>";

for($j=1;$j<10;$j++){
    echo "<tr>";
    echo "<td>$j</td>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo ($j*$i);
        echo "</td>";

    }
    echo "</tr>";
}
echo "</table>";

?>
<style>
.nine{
    border-collapse:collapse;
    margin:20PX;

}

.nine td{
    border:1px solid #aaa;
    width:30px;
    height:30px;
    text-align: center;
}
.nine tr:nth-child(1),
.nine td:nth-child(1){
    background:blue;
    color:white
}

</style>
<?php
//我是第二版
echo "<table class='nine'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo "";
        }elseif($j==0){
            echo $i;
        }elseif($i==0){
            echo $j;
        
        }else
            echo ($j*$i);
        }

        echo "</td>";
    }
    echo "</tr>";
echo "</table>";

?>

<style>
.nine{
    border-collapse:collapse;
    margin:20PX;

}

.nine td{
    border:1px solid #aaa;
    width:30px;
    height:30px;
    text-align: center;
}
.nine tr:nth-child(1),
.nine td:nth-child(1){
    background:blue;
    color:white
}

</style>
<h2>半邊九九乘法表</h2>
<?php
//我是第二版
echo "<table class='nine'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo "";
        }elseif($j==0){
            echo $i;
        }elseif($i==0){
            echo $j;
        }else{
            if($i<=$j){
                echo ($j*$i);
            }
        }  
        
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>



<?php  
//<!-- table>tr*9>td*9-->

/* echo "<table border=1>"
    <tr>
        <td>1 x 1 = 1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

</table>
 */

?>