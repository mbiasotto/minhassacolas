<?php

use DI\Container;

function getControllers(Container $container, array $names) {
    foreach ($names as $name) {
        $container->set($name, function(Container $container) use ($name) {
            $namespace = "App\\Controllers\\$name";
            return new $namespace($container);
        });
    }

    return $container;
}
