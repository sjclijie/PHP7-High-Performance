<?php

$normal_array = [1, 6, 7, 2, 99, 23, 55];

usort($normal_array, function ($a, $b) {
    return $a <=> $b;
});

var_dump($normal_array);


var_dump( $_GET["title"] ?? "hello" );

