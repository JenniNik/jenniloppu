<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92e0dfd419b82c0b0b3c1d7cbc931aa6
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92e0dfd419b82c0b0b3c1d7cbc931aa6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92e0dfd419b82c0b0b3c1d7cbc931aa6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92e0dfd419b82c0b0b3c1d7cbc931aa6::$classMap;

        }, null, ClassLoader::class);
    }
}
