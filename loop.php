<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重複結構</title>
</head>
<body>
    
<h1>for loop 用＋＋</h1>
<?php  

for($i=0 ; $i<10 ; $i++){
    echo $i*10;
    echo "<br>";
}

?>

<h1>for loop 用－－</h1>
<?php  

for($i=10 ; $i>0 ; $i--){
    echo $i*10;
    echo "<br>";
}

?>

<h1>for loop 用13579</h1>
<?php  


for($i=0 ; $i<5 ; $i++){
    echo (2*$i+1)*10;
    echo "<br>";
}

?>


<h1>while</h1>
<?php  
$score=30;
$counter=0;
while($score<60){
    $score=$score+10;
    $counter++;
}

echo $score;
echo "<br>";
echo $counter;

?>

<h1>陣列</h1>
<div>['a','b','good','john',123,999]</div>
<?php
$a=['a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999];

//$a[2]['教室']['學生'][12]['姓名']['學科'][1]

/* echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>";
echo "<br>"; */

for($i=0;$i<count($a);$i++){
    echo $a[$i];
    echo "<br>";
}


$b=['姓名'=>"劉勤永",'數學'=>90,'國文'=>80,'英文'=>20];
//1.先把key值都拿出來
//2.用key做成一個只有key的陣列
//3.用迴圈來跑Key陣列
//4.再去把內容印出來

/* 這個是錯的 $keys=
for($i=0;$i<count($b);$i++){
    echo $b[$i];
    echo "<br>";
} */


//以下才是正確的$b解
// 獲取陣列的鍵
$keys = array_keys($a);

// 使用 for 迴圈遍歷鍵
 for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i]; // 獲取鍵;當前的鍵
    $value = $a[$key]; // 獲取對應的值;使用鍵獲取對應的值
    echo $key . ':' . $value . '<br>'; // 顯示鍵和值
 }


 foreach ($b as $value) {
    echo $value . '<br>';
 }


?>


<div>空白&nbsp;&nbsp;&nbsp;空白</div>
<p>&none break space;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>