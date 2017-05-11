<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 17/5/10
 * Time: 22:58
 */

namespace Publishers\Packet;

function getBook(): string {
    return "PHP 7";
}

function saveBook(string $book): string {
    return $book . ' is saved';
}

