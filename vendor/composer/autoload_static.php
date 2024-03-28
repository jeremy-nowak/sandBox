<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15b03a170fa6a178adb9791ff2ebdfbc
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15b03a170fa6a178adb9791ff2ebdfbc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15b03a170fa6a178adb9791ff2ebdfbc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15b03a170fa6a178adb9791ff2ebdfbc::$classMap;

        }, null, ClassLoader::class);
    }
}
