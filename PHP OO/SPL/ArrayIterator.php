<?php

$array = [
    'Apple',
    'Microsoft',
    'HP'
];

$iterator = new ArrayIterator($array);

//echo $iterator->current();
$iterator->next();
echo $iterator->current();
//
echo $iterator->count();


