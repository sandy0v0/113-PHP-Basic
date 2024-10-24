<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串</title>
</head>
<body>
    <p>[字串取代]</p>
    <ul><li>將”aaddw1123”改成”*********”</li></ul>
    
    <?php
    //w3school的解法
    //echo str_replace("aaddw1123" ,"*", "*********");
    ?>
    <?php
    $str='aaddw1123';
    echo $str ."<br>";

     
    //只有aa被替換成*
    $str=str_replace('aa',"**",$str);
    echo $str ."<br>";
    //只有aadd被替換成*
    $str=str_replace('d',"*",$str);
    echo $str ."<br>";
   
    //
    $str=str_replace(['a','d','w','1','2','3'],"*",$str);
    echo $str ."<br>";
    //任意長度皆可轉換成*
    $str=str_repeat("*",mb_strlen($str));
    echo $str ."<br>";

    ?>


    <p>[字串分割]</p>
    <ul><li>將”this,is,a,book”依”,”切割後成為陣列</li></ul>
    
    <?php
    $str="this,is,a,book";
    $str=explode(",",$str);
    echo "<pre>";
    print_r($str);
    echo "<pre>";
    
    ?>

    <p>[字串組合]</p>
    <ul><li>將上例陣列重新組合成“this is a book”</li></ul>

    <?php
    // 不要用implode 不直覺，要用join
    $str=join(" ",$str);
    echo $str ."<br>";
    ?>

    <p>[子字串取用合(最常見的應用)]</p>
    <ul><li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</li></ul>

    <?php
    // 顯示到第幾個字之後,後面用...顯示
    // 在PHP字串用[陣列]來儲存，開始的第一個字是０
    $str="The reason why a great man is great is that he resolves to be a great man";
    /* 
    $str=substr($str,0,10) . "...";
    echo $str ."<br>"; 
    */
    
    // 在PHP字串用[陣列]來儲存，開始的第一個字是０,另一種方式呈現
    // 盡量使用MB系列
    $str=mb_substr($str,0,10) . "...";
    echo $str ."<br>";


    // 三個字算一個
    // 盡量使用MB系列
    $str="偉大的人之所以偉大，是因為他決心成為一個偉大的人";
    $str=mb_substr($str,0,10) . "...";
    /* $str=substr($str,0,10) . "..."; */
    echo $str ."<br>";

    ?>


    <h1>[尋找字串與HTML、css整合應用]</h1>
    <ul>
        <li>給定一個句子，將指定的關鍵字放大</li>
        <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
        <li>請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>

    <?php

    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $key="程式設計";
    $large="<span style='font-size:28px;color:blue'>".$key."</span>";

    $str=str_replace($key,$large,$str);

    echo $str ."<br>";

    ?>
















</body>
</html>