<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fe8f0d3f40e752850cb6459d8a3c6c0
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fe8f0d3f40e752850cb6459d8a3c6c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fe8f0d3f40e752850cb6459d8a3c6c0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
