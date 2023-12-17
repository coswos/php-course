<?php

$personal = [
    'John' => [
        'age' => 21,
        'price' => 20,
        'currency' => 'usd'
    ],
    'Alice' => [
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

foreach ($personal as $person){
    foreach ($person as $key => $val){
        echo "$key = $val", PHP_EOL, '<br>';
    }
    echo '<br>';
};

echo '<hr>';

$person = [
    'age' => 18,
    'name' => 'John',
    'gender' => 'male'
];

foreach ($person as $key => $val){
    echo  "$key = $val <br>";
}