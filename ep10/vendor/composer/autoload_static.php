<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit230ff7715e8cbddab0626210fad4ec16
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CoffeeCode\\Uploader\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CoffeeCode\\Uploader\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/uploader/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit230ff7715e8cbddab0626210fad4ec16::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit230ff7715e8cbddab0626210fad4ec16::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}