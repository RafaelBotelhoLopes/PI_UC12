<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb1d2c281fa0a3f437689303591844b0
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitbb1d2c281fa0a3f437689303591844b0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitbb1d2c281fa0a3f437689303591844b0::$classMap;

        }, null, ClassLoader::class);
    }
}