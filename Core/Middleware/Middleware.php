<?php

namespace Core\Middleware;
use Core\Middleware\Auth;
use Core\Middleware\Guest;

class Middleware {

  const MAP = [
    'guest' => Guest::class,
    'auth' => Auth::class
  ];
}