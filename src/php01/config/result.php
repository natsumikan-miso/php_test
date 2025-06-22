<?php
$name = htmlspecialchars($_POST['name'] , ENT_QUOTES);
echo "私の名前は、" . $name;
echo '<br/>';
$radio = htmlspecialchars($_POST['radio'] , ENT_QUOTES);
echo "ご注文の商品は、" . $radio;
echo '<br/>';
$number = htmlspecialchars($_POST['number'] , ENT_QUOTES);
echo "注文数は、" . $number;
echo '<br/>' . '<br/>';

echo "復習" . '<br/>';
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
echo "私の名前は" . $name . '<br/>';
$radio = htmlspecialchars($_POST['radio'], ENT_QUOTES);
echo "ご希望商品は" . $radio . '<br/>';
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
echo "注文数は" . $number . '<br/>';