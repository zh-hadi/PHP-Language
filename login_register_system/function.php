<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function basePath($key)
{
    return BASE_PATH.$key.".php";
}

function view($key)
{
    return BASE_PATH."views/".$key.".php";
}