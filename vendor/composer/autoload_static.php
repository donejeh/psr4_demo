<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite89a5be54562d3dd64b664aa2bef55d5
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Naxum\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Naxum\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Naxum',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite89a5be54562d3dd64b664aa2bef55d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite89a5be54562d3dd64b664aa2bef55d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite89a5be54562d3dd64b664aa2bef55d5::$classMap;

        }, null, ClassLoader::class);
    }
}
