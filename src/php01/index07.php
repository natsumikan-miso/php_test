<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}
outputNumber(2);
echo "<br/>";

function outputHello()
{
  echo "Hello world";
}
outputHello();
echo "<br/>";

function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}
$total = text(2, 4);
echo $total;
echo "<br/>";

echo "<br/>";
function number($a, $b)
{
    $value = $a + $b;
    return $value;
}
$total = number(3, 2);
echo $total;
echo "<br/>";

echo "<br/>";
echo "問題";
echo "<br/>";
function scorenumber($score1, $score2, $score3)
{
    $value = $score1 + $score2 + $score3;
    return $value;
}
if($value > 210){
    echo "合計点は OO なので合格です";
}elseif($value <= 210){
    echo "合計点は OO なので不合格です";
}
echo scorenumber(80, 80, 60);
echo "<br/>";

echo "<br/>";
echo "問題 答え";
echo "<br/>";
function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if($total > 210){
        echo $total . "点なので合格です";
    }else{
        echo $total . "点なので不合格です";
    }
}
echo exam(80, 80, 60);
echo "<br/>";

echo "<br/>";
echo "面積";
echo "<br/>";

echo "三角形";
function triangle($width, $height)
{
    $score = $width * $height / 2;
    return $score;
}
echo triangle(7, 8);
echo "<br/>";

echo "四角形";
function square($width, $height)
{
    $score = $width * $height;
    return $score;
}
echo square(5, 5);
echo "<br/>";

echo "台形";
function trapezoid($top, $bottom, $height)
{
    $score = ($top + $bottom) * $height / 2;
    return $score;
}
echo trapezoid(4, 5, 4);
echo "<br/>";

echo '<br/>';
echo "~復習~";
echo '<br/>';
function outputNumbers($a)
{
  echo "引数の値は" . $a . "です";
  return;
}
outputNumbers(2);
echo '<br/>';
function outputword()
{
  echo "Hello world";
}
outputword();
echo '<br/>';
function texts($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}
$total = texts(2, 4);
echo $total;
echo '<br/>';
echo '<br/>';
echo "・問題・";
echo '<br/>';
function Nnmber($a, $b)
{
  $c = $a + $b;
  return $c;
}
$d = number(1, 4);
echo $d;
echo '<br/>';

echo '<br/>';
echo "・Q ~合計点~・";
echo '<br/>';
function totalnumber($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if($total > 210){
    echo "合計点は" . $total . "なので合格です";
  }else{
    echo "合計点は" . $total . "なので不合格です";
  }
  return $total;
}
totalnumber(80, 100, 95);
echo '<br/>';

echo '<br/>';
echo "・Q ~面積~・";
echo '<br/>';
echo "三角形";
echo '<br/>';
function sankaku($width, $height)
{
  return $width * $height / 2;
}
echo sankaku(5, 8);
echo '<br/>' . '<br/>';

echo "復習(2)" . '<br/>';
echo "・function・" . '<br/>';
function output($a)
{
  echo "引数の値は" . $a . "です";
  return;
}
output(2);
echo '<br/>';
function outputtext()
{
  echo "Helloworld";
}
outputtext();
echo '<br/>';
function word($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}
$total = word(2, 4);
echo $total;
echo '<br/>' . '<br/>';

echo "function問題" . '<br/>';
/* 5 */
function question($number1, $number2)
{
  $answer = $number1 + $number2;
  return $answer;
}
$total = question(1, 4);
echo $total;
echo '<br/>' . '<br/>';

echo "・問題・" . '<br/>';
echo "ℚ合計点" . '<br/>'; /* 合計点が 210 より大きい時「合計点は OO なので合格です」、そうではなかったら「合計点は OO なので不合格です」と表示する */
function totalpoint($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if($total > 210){
    echo "合計点は" . $total . "点なので合格です";
  }else{
    echo "合計点は" . $total . "点なので不合格です";
  }
}
$score = totalpoint(50, 70, 80);
echo $score . '<br/>' . '<br/>';

echo "面積" . '<br/>';
function area1($width, $height)
{
  $triangle = $width * $height / 2;
  return $triangle;
}
function area2($width, $height)
{
  $square = $width * $height;
  return $square;
}
function area3($top, $bottom, $height)
{
  $trapezoid = ($top + $bottom) * $height / 2;
  return $trapezoid;
}
echo area1(7, 8) . "\n";
echo area2(5, 5) . "\n";
echo area3(4, 5, 4) . '<br/>';

echo "面積 答え" . '<br/>';
function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}
echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);