<?php
$a = 5;
if($aは5です){$a = 5;}
echo "if";
echo "<br/>";
if($a===5){
    echo "\$aは5です";
}
echo "<br/>";

$a = 7;
if($a===5){
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}
echo "<br/>";

$a = 7;
if($a===5){
    echo "\$aは5です";
}elseif($a===7){
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}
echo "<br/>";

$people="Saburo";
switch("$people"){
    case "Taro":
    echo "太郎です";
    break;
    case "Jiro":
    echo "次郎です";
    break;
    case "Saburo":
    echo "三郎です";
    break;
}
echo "<br/>";

$a=7;
$result=($a===7)?"TRUE":"FALSE";
echo $result;
echo "<br/>";
$a=7;
$b=($a>5)?"TRUE":"FALSE";
echo $b;
echo "<br/>";

echo "<br/>";
/* 復習 */
$a = 5;
if($a == 5){
    echo "\$aは5です";
}
echo "<br/>";
$a = 7;
if($a === 5){
    echo "\$aは5です";
}elseif($a === 7){
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}
echo "<br/>";

echo "<br/>";
$people = "Saburo";
switch($people){
    case "Saburo":
        echo "三郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    default:
    echo "どちらでもない";
    break;
}
echo "<br/>";

echo "<br/>";
$a = 7;
$result = ($a > 3) ? "TRUE":"FALSE";
echo $result;
echo "<br/>";
echo "<br/>";

echo "応用問題";
echo "<br/>";
for($item = 1; $item <= 50; $item++){
    if($item % 3 === 0){
        echo "Fizz";
    }
    if($item % 5 === 0){
        echo "Buzz";
    }
    if($item % 3 === 0 && $item % 5 === 0){
        echo "FizzBuzz";
    }
    if(!$item % 3 ===0 or !$item % 5 === 0){
        echo $item;
    }
}
echo "<br/>";

echo "<br/>";
echo "応用問題 答え";
echo "<br/>";
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";
for($item = 1; $item <= 50; $item++){
    if($item % 15 == 0){
        echo $FizzBuzz;
    }elseif($item % 3 == 0){
        echo $Fizz;
    }elseif($item % 5 == 0){
        echo $Buzz;
    }else{
        echo $item;
    }
}
echo "<br/>";

echo "<br/>";
echo "応用問題 二重ループ";
echo "<br/>";
$i = "1";
while ($i <= 25){
    if($i * 5){
        echo '<br/>';
    }
    echo $i;
    $i++;
}
echo "<br/>";

echo "<br/>";
echo "応用問題 二重ループ 答え";
echo "<br/>";
for($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= 5; $j++){
        echo "●";
    }
    echo "<br/>";
}
/* 外側 ( $i の方 ) のプログラムが 1 回繰り返されるごとに、内側のプログラム ( $j の方) が 5 回繰り返されます。内側のプログラム ( $j の方) 単体では「＊＊＊＊＊」が表示されます。 */

echo '<br/>';
echo '<br/>';
echo "～復習～";
echo '<br/>';

echo "・if・";
echo '<br/>';
$a = 5;
if($a === 5){
    echo "\$aは5です";
}
echo '<br/>';
$a = 7;
if($a === 5){
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}
echo '<br/>';
$a = 7;
if($a === 5){
    echo "\$aは5です";
}elseif($a === 7){
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}
echo '<br/>';
echo '<br/>';

echo "・switch・";
echo '<br/>';
$people = "Saburo";
switch($people){
    case "Saburo":
        echo "三郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    default:
        echo "花子です";
        break;
}
echo '<br/>';
$cat = "mix";
switch($cat){
    case "black":
        echo "黒猫です";
        break;
    case "white":
        echo "白猫です";
        break;
    default:
        echo "三毛猫です";
}
echo '<br/>';
echo '<br/>';

echo "・三項演算子・";
echo '<br/>';
$a = 7;
$result = ($a > 3) ? "TRUE":"FALSE";
echo $result;
echo '<br/>';
$a <= 30;
$b = ($a > 31) ? "30以下です":"30より大きいです";
echo $b . '<br/>';
echo '<br/>';

echo "・復習(2)・";
echo '<br/>';

echo "if";
echo '<br/>';
if($a = 5){
    echo '$a' . "は" . 5 . "です";
}else{
    echo '$a' . "は" . 5 . "以外です";
}
echo '<br/>';
if ($a === 5) {
    echo "\$aは5です";
}
echo '<br/>';

$a = 7;
if($a === 5){
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}
echo '<br/>';

$a = 7;
if($a === 5){
    echo "\$aは5です";
}elseif($a === 7){
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}
echo '<br/>' . '<br/>';

echo "switch";
echo '<br/>';
$people = "Saburo";
switch($people){
    case "Ichiro":
        echo "一郎です";
    case "Jiro":
        echo "次郎です";
    case "Saburo":
        echo "三郎です";
}                                    /* break忘れ */
echo '<br/>';
$people = "Saburo";
switch ($people) {
    case "Taro":
        echo "太郎です";
    break;
    case "Jiro":
        echo "次郎です";
    break;
    case "Saburo":
        echo "三郎です";
    break;
}
echo '<br/>' . '<br/>';

echo "三項演算子";
echo  '<br/>';
$a = 7;
$b = ($a === 7)? "TRUE":"FALSE";
echo $b . '<br/>';

$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;
echo '<br/>';

$a = 7;
$c = ($a < 10)? "TURE":"FALSE";
echo $c;