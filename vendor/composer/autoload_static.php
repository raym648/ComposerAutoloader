<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd466f4d938bd044252ee1097a6603238
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd466f4d938bd044252ee1097a6603238::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd466f4d938bd044252ee1097a6603238::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
