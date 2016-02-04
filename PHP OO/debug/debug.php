<?php

ini_set('display_errors','On');
error_reporting(E_ALL);
# php.ini

function xpto() {
    xptox();
}

function xptox() {
    xptoxy();
}

function xptoxy() {
    debug_print_backtrace();
}

$array = array(1,2,3,4);

foreach($array as $val) {
    echo $val;
}

$x = 1;
$y = 2;
$z = 3;
$x = $z;

xpto();