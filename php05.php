<?php
echo 'hello php!';

// 課題1 

$name = "nobuyuki nagato";

if($name === "nobuyukinagato"){
    echo "私は貴方の名前です。";
} else {
    echo"私はあなたの名前ではありません。";
}

// 課題2
$total = 0;
echo $total;

for($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

echo "\n";

//課題3
$fruits = array("apple","orange","banana","strawberry","grape");

foreach($fruits as $fruit){
    echo "要素は". $fruit;
    echo "\n";
}

// 課題4
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
    if($i % 5 ==0){
        echo $i;
        echo "\n";
    }
}
