<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe369f961a1a4c070cfc753895c50515
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe369f961a1a4c070cfc753895c50515::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe369f961a1a4c070cfc753895c50515::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe369f961a1a4c070cfc753895c50515::$classMap;

        }, null, ClassLoader::class);
    }
}
