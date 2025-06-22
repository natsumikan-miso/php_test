<?php
$a = 15;
$b = 3;
$c = 10;
echo $a+$b;
echo "<br/>";
echo $a-$b;
echo "<br/>";
echo $a*$b;
echo "<br/>";
echo $a-$c;
echo "<br/>";
echo $a/$b;

$a = 15;
$b = 3;
$c = 10;
$d = 5;
$a=$b;
$c+=$d;
echo "<br/>";
echo "$a";
echo "<br/>";
echo "$c";
echo "<br/>";

$a = 20;
$b = 5;
echo $a>$b;
echo "<br/>";

$a = 20;
$b = 5;
echo $a>10 && $a<30;
echo "<br/>";

$a = 10;
$b = 10;
$c = 5;
$d = 5;
echo ++$a;
echo "<br/>";
echo $b--;
echo "<br/>";
echo --$c;
echo "<br/>";
echo $d--;
echo "<br/>";

echo "<br/>";
/*復習*/
$a = 15;
$b = 3;
$c = 10;
/*18
12
45
5
5*/
echo $a + $b;
echo "<br/>";
echo $a - $b;
echo "<br/>";
echo $a * $b;
echo "<br/>";
echo $a / $b;
echo "<br/>";
echo $a % $c;
echo "<br/>";

$a = 15;
$b = 3;
$c = 10;
$d = 5;
echo "<br/>";
echo $a = $b;
echo "<br/>";
echo $b *= $d;
echo "<br/>";

echo "<br/>";
$a = 20;
$b = 5;
echo ($a > $b);
echo "<br/>";

echo "<br/>";
$a = 20;
$b = 5;
echo ($a > 10 && $a < 30);
echo "<br/>";

echo "<br/>";
$a = 10;
$b = 10;
$c = 5;
$d = 5;
echo ++$a;
echo "<br/>";
echo $b++;
echo "<br/>";
echo --$c;
echo "<br/>";
echo $d--;
echo "<br/>";

$q = 2;
$w = "2";
if($q === $w){
    echo "$q が $w に等しい時に TRUE";
}
echo '<br/>';

echo '<br/>';
echo "・復習・";
echo '<br/>';
echo "算術演算子";
echo '<br/>';
/* 18
12
45
5
5 */
$a = 15;
$b = 3;
$c = 10;
echo $a + $b . '<br/>';
echo $a - $b . '<br/>';
echo $a * $b . '<br/>';
echo $a / $b . '<br/>';
echo $a % $c . '<br/>';
echo '<br/>';
$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;
echo $answer1 . '<br/>';
echo $answer2 . '<br/>';
echo $answer3 . '<br/>';
echo $answer4 . '<br/>';
echo $answer5 . '<br/>';
echo '<br/>';

echo "代入演算子、複合演算子";
echo '<br/>';
$a = 15;
$b = 3;
$c = 10;
$d = 5;
$a = $b;
echo $a . '<br/>';
$b *= $d;
echo $b . '<br/>';
echo '<br/>';

echo "比較演算子";
echo '<br/>';
$a = 20;
$b = 5;
echo $a > $b . '<br/>';
echo '<br/>';

echo "論理演算子";
echo '<br/>';
$a = 20;
$b = 5;
echo ($a > 10 && $a <30) . '<br/>';
echo '<br/>';

echo "加算子、減算子";
echo '<br/>';
$a = 10;
$b = 10;
$c = 5;
$d = 5;
echo ++$a . '<br/>';
echo $b++ . '<br/>';
echo --$c . '<br/>';
echo $d-- . '<br/>';