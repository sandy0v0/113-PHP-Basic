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


<h1>利用date()函式的格式化參數，完成以下的日期格式呈現</h1>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
<?php
$weekString=[
    'Monday' => ['min'=>'一','short'=>'周一','fulltext'=>'星期一'],
    'Tuesday' => ['min'=>'二','short'=>'周二','fulltext'=>'星期二'],
    'Wednesday' => ['min'=>'三','short'=>'周三','fulltext'=>'星期三'],
    'Thursday' => ['min'=>'四','short'=>'周四','fulltext'=>'星期四'],
    'Friday' => ['min'=>'五','short'=>'周五','fulltext'=>'星期五'],
    'Saturday'=> ['min'=>'六','short'=>'周六','fulltext'=>'星期六'],
    'Sunday' => ['min'=>'日','short'=>'周日','fulltext'=>'星期日'],
    ];

echo date("Y年m月d日");
echo "<br>";
echo date("m月d日 l");
echo "<br>";
echo date("m月d日").$weekString[date("l")]['min'];
echo "<br>";
echo date("m月d日").$weekString[date("l")]['short'];
echo "<br>";
echo date("m月d日").$weekString[date("l")]['fulltext'];
echo "<br>";
echo "今天是西元".date("Y年m月d日");
if(date("N")>5){
    echo "假日";
}else{
    echo "上班日";
}
echo "<br>";
?>

<?php
// 這是chatGPT的解法
// 顯示當前日期
echo date("Y年m月d日");
echo "<br>";

// 獲取當前星期幾的英文
$english_day = date("l");

// 定義對應的中文星期
$days_in_chinese = [
    "Sunday" => "星期日",
    "Monday" => "星期一",
    "Tuesday" => "星期二",
    "Wednesday" => "星期三",
    "Thursday" => "星期四",
    "Friday" => "星期五",
    "Saturday" => "星期六"
];

// 將英文星期轉換為中文
$chinese_day = $days_in_chinese[$english_day];

// 輸出結果
echo date("m月d日 ") . $chinese_day;
echo "<br>";
?>


<h1>利用迴圈來計算連續五個周一的日期</h1>

<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>

<?php
for($i=0;$i<5;$i++){
    $timestamp=strtotime("+$i weeks".date("Y-m-d"));
    echo date("Y-m-d",$timestamp);
    echo "&nbsp;";
    echo $weekString[date("l")]['fulltext'];
    echo "<br>";
}






?>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>


</body>
</html>