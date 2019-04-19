<?php

spl_autoload_register(function($classes) {
    $classes = explode('\\', $classes);
    include __DIR__ . '/src/' . end($classes) . '.php';
});
