<?php


use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\Http\Request;
use Pecee\Http\Response;

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

function redirect(string $url, ?int $code = null): void
{
    if ($code !== null) {
        response()->httpCode($code);
    }
    response()->redirect($url);
}

function response(): Response
{
    return Router::response();
}
