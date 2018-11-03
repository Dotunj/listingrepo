<?php


use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\Http\Request;

function request(): Request
{
    return Router::request();
}

function input($index = null, $defaultValue = null, ...$methods)
{
    if ($index !== null) {
        return request()->getInputHandler()->getValue($index, $defaultValue, ...$methods);
    }
    return request()->getInputHandler();
}