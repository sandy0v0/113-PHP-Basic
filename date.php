<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5 時間及日期處理</title>
</head>
<body>
    
<h1>[給定兩個日期，計算中間間隔天數]</h1>

    <?php
date_default_timezone_set("Asia/Taipei");

    echo date("Y/m/d H:i:s");
    echo "<br>";

    // 如果沒有特別寫時間就是從00:00秒開始計算
    $start="2024-10-01";
    $end="2024-10-30";
    $startTime=strtotime($start);
    echo '開始時間'.$startTime;
    echo "<br>";
    $endTime=strtotime($end);
    echo '開始時間'.$endTime;
    echo "<br>";
    $gap=$endTime-$startTime;
    echo '差距秒'.$gap;
    echo "<br>";
    $days=$gap/(60*60*24);
    echo '間隔'.$days;
    echo "<br>";
    /*     
    // 要小心日光節約時間問題，可以用無條件進位
    $s=86400;
    echo $s*29;
    echo "<br>"; 
    */



    /*  
    // 這是chatGPT的解法
    $date1="2024-10-24";
    $date2="2024-10-25";
    // 將日期轉換成時間戳記
    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);

    // 計算兩個時間戳記之間的差異（以秒為單位）
    $difference_in_seconds = $timestamp2 - $timestamp1;

    // 將秒數轉換成天數
    $difference_in_days = $difference_in_seconds / (60 * 60 * 24);

    // 輸出結果
    echo "兩個日期之間的間隔天數是: " . $difference_in_days;
    */

    ?>

<h1>[計算距離自己下一次生日還有幾天]</h1>
<?php
$start=date("Y/m/d");
$end="2025-10-07";
$startTime=strtotime($start);
echo '今日日期'.$startTime;
echo "<br>";
$endTime=strtotime($end);
echo '下次生日'.$endTime;
echo "<br>";
$gap=$endTime-$startTime;
echo '差距秒'.$gap;
echo "<br>";
$days=$gap/(60*60*24);
echo '距下次生日還有'.$days."天";
echo "<br>";
?>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>


</body>
</html>