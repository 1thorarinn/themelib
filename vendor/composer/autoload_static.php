<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaeb0bf1b9f71044b682e03181d29e663
{
    public static $files = array (
        '7031ecefe7fbc23de39ce80ff0e27bf8' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Tms' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitaeb0bf1b9f71044b682e03181d29e663::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}