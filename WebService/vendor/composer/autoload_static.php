<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e01589d088e4352640bdae3d2b53c56
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e01589d088e4352640bdae3d2b53c56::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e01589d088e4352640bdae3d2b53c56::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2e01589d088e4352640bdae3d2b53c56::$classMap;

        }, null, ClassLoader::class);
    }
}
