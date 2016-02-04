<?php

$fruits = new ArrayIterator(array(
    'apple',
    'banana',
    'cherry',
    'damson',
    'elderberry'
));

foreach (new LimitIterator($fruits, 2, 3) as $fruit) {
   echo $fruit."<br>";
}

echo "<hr>";

foreach (new LimitIterator($fruits, 2,2) as $fruit) {
    echo $fruit."<br>";
}

?>