<?php

$personal = [
    [
        'age' => 21,
        'price' => 20,
        'currency' => 'usd'
    ],
    [
        'age' => 18,
        'price' => 16,
        'currency' => 'usd'
    ],
    [
        'age' => 22,
        'price' => 21,
        'currency' => 'usd'
    ]
];


$counter = count($personal);

for ($i = 0; $i < $counter; $i++) {
    echo 'age: ', $personal[$i]['age'], '<br>';
}

$index = 0;

echo '<hr>';
while ($index < $counter) {
    echo  'age: ', $personal[$index]['age'], '<br>';
    $index++;
}
