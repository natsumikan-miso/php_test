<?php
for ($i = 0; $i < 4; $i++) {
  echo $i;
}
echo "<br/>";

for($i=2; $i<=10; $i++){
    echo $i;
}
echo "<br/>";
for($i = 1; $i <= 5; $i++){
    echo $i*2 .'<br/>';
}
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . '<br />';
  }
echo "<br/>";

$i = 0;
while ($i < 3) {
  echo 'i = ' . $i . '<br />';
  $i += 1;
}
echo "<br/>";

$count = 0;
while($i < 20){
    if($count == 20){
        break;
    }
    echo ++$count . "<br/>";
}
echo "<br/>";

$count = 0;
while($count < 100){
    if($count == 20){
        break;
    }
    echo $count += 1 . '<br/>';
    if  ($count == 1){
        $count * 3;
        continue;
    }
    echo $count . '<br/>';
}
echo "<br/>";

$count = 0;
while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}
echo "<br/>";

$i = 0;
do {
  echo $i . '<br />';
  $i++;
} while ($i < 5);
echo "<br/>";

$num = 0;
do{
    echo '$num =' . $num . '<br/>';
    $num++;
}while($num < 3);
echo "<br/>";

echo "<br/>";
/* 復習 */
for($i = 0; $i < 4;$i++){
    echo $i;
}
echo "<br/>";

echo "<br/>";
for($i = 1; $i <= 5; $i++){
    echo $i * 2 . '<br/>';
}echo "<br/>";

$count = 0;
while($count < 20){
    $count += 1;
    echo $count . '<br/>';
}
echo "<br/>";

echo "do while";
echo "<br/>";
$i = 0;
do{
    echo $i . '<br/>';
    $i++;
}while($i < 5);
echo "<br/>";

echo "do while 問題";
echo "<br/>";
$num = 0;
do{
    echo 'num =' . $num . '<br/>';
    $num++;
}while($num < 3);
echo "<br/>";

echo "while問題 答え";
echo "<br/>";
$count = 0;
while($count <= 100){
    if($count === 20){
        break;
    }
    if($count % 3 === 0){
        $count += 1;
        continue;
    }
    echo $count . '<br/>';
    $count++;
}
echo "<br/>";

echo "while問題";
echo "<br/>";
$count = 0;
while($count <= 100){
    if($count === 20){
        break;
    }
    if($count % 3 === 0){
        $count++;
        continue;
    }
    echo $count . '<br/>';
    $count += 1;
}
echo "<br/>";

echo '<br/>';
echo "～復習～";
echo '<br/>';

echo "・for・";
echo '<br/>';
for($i = 0; $i <= 4; $i++){
    echo $i;
}
echo '<br/>';
for($i = 1; $i <= 5; $i++){
    echo $i * 2 . '<br/>';
}
echo '<br/>';

echo "・while・";
echo '<br/>';
$i = 0;
while($i < 3){
    echo '$i = ' . $i . '<br/>';
    $i += 1;
}
echo '<br/>';
$count = 0;
while($count < 20){
    $count++;
    echo $count . '<br/>';
}
echo '<br/>';
echo "break";
echo '<br/>';
$a = 0;
while($a < 10){
    if($a == 5){
        break;
    }
    echo $a;
    $a++;
}
echo '<br/>';
$a = 0;
while($a < 10){
    if($a == 5){
        $a++;
        continue;
    }
    echo $a;
    $a++;
}
echo '<br/>';
echo '<br/>';
$count = 0;
while($count <= 100){
    if($count === 20){
        break;
    }
    if($count % 3 === 0){
        $count++;
        continue;
    }
    echo $count . '<br/>';
    $count++;
}
echo '<br/>';

echo "・do...while・";
echo '<br/>';
$i = 0;
do{
    echo $i . '<br/>';
    $i++;
}while($i < 5);
echo '<br/>';
$num = 0;
do{
    echo 'num = ' . $num . '<br/>';
    $num++;
}while($num < 3);   
echo '<br/>';

echo "・応用問題・";
echo '<br/>';
echo "~FizzBuzz~";
echo '<br/>';
for($i = 1; $i <= 50; $i++){
    if($i % 15 === 0){
        echo 'FizzBuzz';
        continue;
    }elseif($i % 5 === 0){
        echo 'Buzz';
        continue;
    }elseif($i % 3 === 0){
        echo 'Fizz';
        continue;
    }
    echo $i;
}
'12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz1617Fizz19BuzzFizz2223FizzBuzz26Fizz2829FizzBuzz3132Fizz34BuzzFizz3738FizzBuzz41Fizz4344FizzBuzz4647Fizz49Buzz';
'12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz1617Fizz19BuzzFizz2223FizzBuzz26Fizz2829FizzBuzz3132Fizz34BuzzFizz3738FizzBuzz41Fizz4344FizzBuzz4647Fizz49Buzz';
'12Fizz4BuzzFizz78FizzBuzz11Fizz1314Fizz1617Fizz19BuzzFizz2223FizzBuzz26Fizz2829Fizz3132Fizz34BuzzFizz3738FizzBuzz41Fizz4344Fizz4647Fizz49Buzz';
echo '<br/>';
echo "~二重ループ~";
echo '<br/>';
for($i = 0; $i < 5; $i++){
    for($o = 0; $o < 5; $o++){
        echo "●";
    }
    echo '<br/>';
}
echo '<br/>';

echo "・復習(2)・";
echo '<br/>';
echo "for" . '<br/>';
for($a = 1; $a <= 5; $a++){
    echo $a * 2 . '<br/>';
}
echo '<br/>';
for($b = 1; $b <= 5; $b++){
    echo $b - 1 . '<br/>';
}
echo '<br/>';

echo "while";
echo '<br/>';
$i = 0;
while($i < 3){
    echo '$i = ' . $i . '<br/>';
    $i += 1;
}

/* 1
2
3
4
...
19
20 */
$count = 0;
while($count < 20){
    $count++;
    echo $count . '<br/>';
}
/* break */
$i = 0;
while($i < 10){
    if($i === 5){
        break;
    }
    echo $i;
    $i++;
}
echo '<br/>';
/* continue */
$i = 0;
while($i < 10){
    if($i === 5){
        $i++;
        continue;
    }
    echo $i;
    $i++;
}
echo '<br/>' . '<br/>';

echo "while問題";
echo '<br/>';
$count = 0;
while($count < 100){
    if($count === 20){
        break;
    }
    if($count % 3 === 0){
        $count++;
        continue;
    }
    echo $count . '<br/>';
    $count += 1;
}
echo '<br/>';

echo "do...while" . '<br/>';
$i = 0;
do{
    echo $i . '<br/>';
    $i++;
}while($i < 5);

echo '<br/>' . "do...while問題" . '<br/>';
/* num = 0
num = 1
num = 2 */
$num = 0;
do{
    echo 'num = ' . $num . '<br/>';
    $num++;
}while($num < 3);
echo '<br/>';

echo "応用問題" . '<br/>';
echo "Q. FizzBuzz問題" . '<br/>';
for($i = 1; $i <= 50; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo 'FizzBuzz';
    }elseif($i % 3 === 0){
        echo 'Fizz';
    }elseif($i % 5 === 0){
        echo 'Buzz';
    }else{
        echo $i;
    }
}
echo '<br/>' . "答え" . '<br/>';
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";
for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}
echo '<br/>' . '<br/>';
echo "Q. 二重ループ問題" . '<br/>';
for($i = 1; $i <= 5; $i++){
    for($u = 1; $u <= 5; $u++){
        echo "●";
    }
    echo '<br/>';
}