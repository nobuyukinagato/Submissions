<?php
echo "hello php!";

// 課題1

function double($arg){
 return $arg *= 2;
    }
echo double(3);

echo "\n";

// 課題2 $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
 function add($a, $b){
 $result = 0;
 $result = $a + $b;
 return $result;
 }
 $a = 4;
 $b = 8;
 echo add($a,$b);
 echo "\n"; 
 
//  課題3$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function multiple($arr){

    $result = $arr[0];
    for($i=0; $i<count($arr);$i++){
        $result *= $arr[$i];
    }
    return $result;
}
    $arr = array(1,3,5,7,9);
   echo multiple($arr);
// $resultって1で良いのか？
 echo "\n"; 

//  課題4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($ar){
    $max_number = $ar[0];
    foreach($ar as $a){
        if ($max_number <= $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
$ar = array(30,3,100,7,9);
echo max_array($ar);

// 課題5

// ・strip_tags
$text = '<p>テストテストテスト,</p><a href="#fragment">aaaaaa</a>';
echo strip_tags($text,['a','h1']);
echo "\n";

// array_push() 
$animal_box = array("dog","cat");
array_push($animal_box,"rabbit","panda","bird");
foreach ($animal_box as $animal){
    echo $animal;
    echo "\n";
}

// array_merge
$fruits1 = ['apple', 'orange', 'melon', 'banana', 'pineapple'];
$fruits2 = ['strawberry', 'cherry', 'watermelon'];
$fruits3 = ['anzu', 'papaya'];
 
$fruits_merge = array_merge($fruits1, $fruits2, $fruits3);
 
print_r($fruits_merge);

// time
$now = time();
echo date('Y年m月d日h時i分s秒',$now);

// mktime
$birthday = mktime(0,0,0,7,26,1994);
echo date('Y年m月d日h時i分s秒',$birthday);
echo "\n";
echo date('Y年m月d日',$birthday);
echo "\n";

// date
date_default_timezone_set('Asia/Tokyo');
$timestamp =strtotime("20220711");
echo date('Y年m月d日 H時i分s秒',$timestamp);
