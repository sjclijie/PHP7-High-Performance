<?php

spl_autoload_register(function ($className) {
    include str_replace("\\", "/", $className) . ".php";
});

// use class
$ebook = new Publishers\Packet\Ebook();
$book  = new Publishers\Packet\Book();

// use function
include "./Publishers/Packet/functions.php";
include "./Publishers/Packet/constants.php";

/*
 *  一
use function Publishers\Packet\getBook;
var_dump(Publishers\Packet\getBook());
*/

/*
 * 二
use function Publishers\Packet\getBook;
use function Publishers\Packet\saveBook;

var_dump(getBook());
var_dump(saveBook("php 7"));
*/


/*
use function Publishers\Packet\{
    getBook, saveBook
};

var_dump(getBook());
var_dump(saveBook("php 7"));

use const Publishers\Packet\{
    COUNT, KEY
};

var_dump( COUNT );
var_dump( KEY );
*/

/**
 * 混全模式的 use 声明
 */
use Publishers\Packet\{
    Book,
    Ebook,
    Video,
    function getBook,
    function saveBook,
    const COUNT,
    const KEY
};

echo (new Book())->get();
echo (new Ebook())->get();
var_dump(getBook());



