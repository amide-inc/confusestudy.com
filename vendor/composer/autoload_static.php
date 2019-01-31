<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcaf940b64275c3104139afba384f0341
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/php-sdk-v4/src/Facebook',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcaf940b64275c3104139afba384f0341::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcaf940b64275c3104139afba384f0341::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}