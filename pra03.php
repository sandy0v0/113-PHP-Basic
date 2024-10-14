<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星</title>
<style>
    * {
        font-family: 'Courier New', Courier, monospace
    }
</style>

</head>
<body>

<?php

echo "*";
echo "<br>";
echo "**";
echo "<br>";
echo "***";
echo "<br>";
echo "****";
echo "<br>";
echo "*****";
echo "<br>";
?>
<hr>
<h1>直角三角形</h1>
 <?php

for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
    //for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>

<hr>
<h2>倒直角三角形</h2>
<?php
echo "*****";
echo "<br>";
echo "****";
echo "<br>";
echo "***";
echo "<br>";
echo "**";
echo "<br>";
echo "*";
echo "<br>";
?>

<hr>
<?php

for($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){
    //for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>

<hr>
<h2>正三角形</h2>
 <?php

for($i=0;$i<5;$i++){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }     

    for($j=0;$j<(2*$i+1);$j++){
    //for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<p>&nbsp;&nbsp;&nbsp;&nbsp;*</p>
<p>&nbsp;&nbsp;&nbsp;***</p>
<p>&nbsp;&nbsp;*****</p>
<p>&nbsp;*******</p>
<p>&nbsp</p>


<hr>
<h2>倒正三角形</h2>

<?php

for($i=0;$i<5;$i++){

    for($k=0;$k<$i;$k++){
        echo "&nbsp;";
    }     

    for($j=0;$j<(2*(4-$i)+1);$j++){
    //for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>倒正三角形</h2>
 <?php

for($i=4;$i>=0;$i--){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }     

    for($j=0;$j<(2*$i+1);$j++){
    //for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>註解</h2>

// <-兩條是第一種
/** <-*可以打段落
*
*
*/

<p>&nbsp</p>
<p>&nbsp;*******</p>
<p>&nbsp;&nbsp;*****</p>
<p>&nbsp;&nbsp;&nbsp;***</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;*</p>


<h2>菱形-解法(原)</h2>
 <?php

for($i=0;$i<9;$i++){
    if($i>4){
        /* $t=$i-4;
        $i-4    => 1,2,3,4
        2*($i-4)=> 2,4,6,8
        $i      => 5,6,7,8
        2*($i-(2*($i-4)))+1  => 7,5,3,1
        2*($i-(2*$i-8))+1
        2*(8-$i)+1
        17-2$i */

        for($k=0;$k<$i-4;$k++){
            echo "&nbsp;";
        }     

        for($j=0;$j<2*($i-(2*($i-4)))+1;$j++){
            echo "*";
        }
        echo "<br>";

    }else{

        for($k=0;$k<4-$i;$k++){
            echo "&nbsp;";
        }

        for($j=0;$j<(2*$i+1);$j++){
            echo "*";
        }
    echo "<br>";

    }
}
?>

<h2>菱形-解法(簡化版) </h2>
 <?php

for($i=0;$i<9;$i++){
    if($i>4){
        $k1=$i-4;
        $j1=2*($i-(2*($i-4)))+1;
    }else{
        $k1=4-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        echo "*";
    }
    echo "<br>";

}
?>

<h2>矩形練習</h2>
 <?php

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i==0 || $i==4){
            echo "*";
        }else if($j==0 ||$j==4){
            echo "*";
        }else if($i==$j || $j==(4-$i)){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>

<h2>矩形含對角線練習</h2>
 <?php

for($i=0;$i<6;$i++){
    for($j=0;$j<6;$j++){
        if($i==0 || $i==5){
            echo "*";
        }else if($j==0 ||$j==5){
            echo "*";
        }else if($i==$j || $j==(5-$i)){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>

<h2>矩形含對角線練習+變數可自由調整大小</h2>
 <?php

$width=11;

for($i=0;$i<$width;$i++){
    for($j=0;$j<$width;$j++){
        if($i==0 || $i==($width-1)){
            echo "*";
        }else if($j==0 ||$j==($width-1)){
            echo "*";
        }else if($i==$j || $j==(($width-1)-$i)){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>








</body>
</html>