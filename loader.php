<?php
spl_autoload_register(function ($class)
        {
            $relPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . $relPath . '.php';
        });