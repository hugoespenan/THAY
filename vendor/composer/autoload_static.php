<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4638d8962d8f36c03c39ba64e52c7f3
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita4638d8962d8f36c03c39ba64e52c7f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4638d8962d8f36c03c39ba64e52c7f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4638d8962d8f36c03c39ba64e52c7f3::$classMap;

        }, null, ClassLoader::class);
    }
}
