<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php

$name=$_POST["username"];
echo "你的名字:" .$name."<br/>";

$address=$_POST["ad"];
echo "住址:" .$address."<br/>";

$id=$_POST["id"];
echo "身分證:" .$id."<br/>";

$birth=$_POST["bdate"];
echo "生日:" .$birth."<br/>";

$gender=$_POST["gender"];
echo "性別:" .$gender. "<br/>";

$food=$_POST["vegetable"];
echo "吃素嗎:" .$food. "<br/>";

$City=$_POST["City"];
$City2=$_POST["City"];
$City=count($City);
for($i=0 ; $i<$City; $i++)
    {
        echo "你的城市:" .$City2[$i]."<br/>";
    }

$sick=$_POST["sick"];
echo "有無特殊疾病:" .$sick. "<br/>";

$comment1=$_POST["comment1"] ;  
echo nl2br($comment1);

$comment2=$_POST["comment2"];  
echo nl2br($comment2);













?>