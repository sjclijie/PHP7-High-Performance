<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 17/5/11
 * Time: 22:27
 */


try {

    not_exists_func();

} catch (Error $e) {

    echo $e->getMessage();
}

