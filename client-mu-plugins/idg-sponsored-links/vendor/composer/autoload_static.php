<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ded1c3dac14ed4f0fc9043749a25f8a
{
    public static $files = array (
        '0c2b9cc83b71503e4be886c0f3a129ac' => __DIR__ . '/../..' . '/inc/setup.php',
        '227248506b28b30abcdc6bfe3fd3fcc8' => __DIR__ . '/../..' . '/inc/asset-settings.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IDG\\Sponsored_Links\\' => 20,
        ),
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IDG\\Sponsored_Links\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'IDG\\Sponsored_Links\\Sponsored_Link_Post_Type' => __DIR__ . '/../..' . '/inc/class-sponsored-link-post-type.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ded1c3dac14ed4f0fc9043749a25f8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ded1c3dac14ed4f0fc9043749a25f8a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ded1c3dac14ed4f0fc9043749a25f8a::$classMap;

        }, null, ClassLoader::class);
    }
}
