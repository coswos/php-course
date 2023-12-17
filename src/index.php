<?php


$c = 1;
while ($c < 6) {
    echo "Counter while: $c<br>";
    $c++;
}

echo "<hr>";

for ($c = 1; $c < 6; $c++) {
    echo "Counter for: $c<br>";
}

echo "<hr>";

$colors = ["red", "green", "blue", "yellow"];

for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i], PHP_EOL;;
}

echo "<hr>";

$index = 0;
while ($index < count($colors)) {
    echo $colors[$index], PHP_EOL;
    $index++;
}
