<?php
$people = array('Taro', 'Jiro', 'Saburo');
var_dump($people);
echo '<br/>';

echo $people[0];
echo '<br/>';

echo '<br/>';
echo "連想配列";
echo '<br/>';
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);
var_dump($people);
echo '<br/>';

echo $people['person2'];
echo '<br/>';

$people = [
    'person1' => 'taro',
    'person2' => 'jiro',
  ];

  echo $people['person1'];
echo '<br/>';

echo '<br/>';
echo "多次元配列";
echo '<br/>';
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];
echo $people[0]["last_name"];
echo '<br/>';

echo '<br/>';
echo "「foreach」";
echo '<br/>';
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}
echo '<br/>';

$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $last_name) {
  print $person . "は" . $last_name . "です" . '<br />';
}
echo '<br/>';

echo "問題";
echo '<br/>';
$people = [
    'person1' => [
        "name" => "Taro",
        "age" => 25,
        "gender" => "men"
    ],
    'person2' => [
        "name" => "Jiro",
        "age" => 20,
        "gender" => "men"
    ],
    'person3' => [
        "name" => "Hanako",
        "age" => 16,
        "gender" => "women"
    ]
    ];
foreach($people as $person => $name){
    echo $person . $name . "(" . $age . "歳" . $gender . ")";
}

echo '<br/>';
echo "問題 答え";
echo '<br/>';
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
echo '<br/>' . '<br/>';

echo "・復習・" . '<br/>';
echo "配列" . '<br/>';
$people = array('Taro', 'Jiro', 'Saburo');
var_dump($people);
echo '<br/>';
echo $people[0];
echo '<br/>';

$fruit = array('apple', 'orange', 'lemon');
echo $fruit[0];
echo '<br/>';
var_dump($fruit);
echo '<br/>';
$fruit = ['apple', 'orange', 'lemon'];
var_dump($fruit);
echo '<br/>';
echo $fruit[1];
echo '<br/>' . '<br/>';

echo "連想配列" . '<br/>';
$people = array(
  'peason1' => 'Taro', 
  'peason2' => 'Jiro',
  'peason3' => 'Saburo'
);
var_dump($people);
echo '<br/>';
$people = [
  'peason1' => 'Taro',
  'peason2' => 'Jiro'
];
var_dump($people);
echo '<br/>';
echo $people['peason1'] . '<br/>' . '<br/>';

echo "多次元配列" . '<br/>';
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_nsme" => "花子",
    "age" => 20,
    "genger" => "女性"
  ]
];
echo $people[0]["last_name"];
echo '<br/>';

$fruit = [
  [
    "name" => "りんご",
    "color" => "赤"
  ],
  [
    "name" => "みかん",
    "color" => "オレンジ"
  ],
  [
    "name" => "レモン",
    "color" => "黄色"
  ]
];
echo $fruit[0]["name"];
echo '<br/>';
var_dump($fruit);
echo '<br/>' . '<br/>';

echo "・foreach・" . '<br/>';
$people = array('Taro', 'Jiro', 'Saburo');
foreach ($people as $peason){
  echo $peason . '<br/>';
}
echo '<br/>';
$people = array(
  'peason1' => 'Taro',
  'peason2' => 'Jiro',
  'peason3' => 'Saburo'
);
foreach ($people as $peason => $name){
  echo $peason . "は" . $name . "です" . '<br/>';
}
echo '<br/>';

$fruit = [
  'taste1' => 'apple',
  'taste2' => 'orange',
  'taste3' => 'lemon'
];
foreach ($fruit as $taste => $name){
  echo $taste . "は" . $name . "です" . '<br/>';
}
echo '<br/>';

echo "問題" . '<br/>';
/* Taro(25歳men)
Jiro(20歳men)
hanako(16歳women) */
$peoples = [
  [
    'name' => 'Taro',
    'age' => 25,
    'gender' => 'men'
  ],
  [
    'name' => 'Jiro',
    'age' => 20,
    'gender' => 'men'
  ],
  [
    'name' => 'Hanako',
    'age' => 16,
    'gender' => 'women'
  ]
];
foreach ($peoples as $peasons => $person){
  echo $peasons[0] . "(" . $peasons[1] . "歳" . $peasons[2] . ")" . '<br/>';
}
echo '<br/>';

echo "問題答え" . '<br/>';
$people = [
  [
    'Taro', 25, 'men'
  ],
  [
    'Jiro', 20, 'men'
  ],
  [
    'Hanako', 16, 'women'
  ]
];
foreach ($people as $peason){
  echo $peason[0] . "(" . $peason[2] . "歳" . $peason[3] . ")". '<br/>';
}