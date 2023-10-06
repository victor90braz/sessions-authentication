<?php

namespace Core\Middleware;
use Core\Middleware\Auth;
use Core\Middleware\Guest;

class Middleware {

  public const MAP = [
    'guest' => Guest::class,
    'auth' => Auth::class
  ];

  static public function resolve($key) {

    if (!$key) {
      return;
    }

    $middleware = static::MAP[$key];

    (new $middleware)->handle();
  }
}