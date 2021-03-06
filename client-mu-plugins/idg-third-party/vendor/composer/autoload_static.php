<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b5ad2496a4409b5167f3a5b99bd159d
{
    public static $files = array (
        '00fea30bd00669fab3f45abd1276e69a' => __DIR__ . '/../..' . '/inc/asset-settings.php',
        'ce1fbd0a49b0300f576911ab4bb961cb' => __DIR__ . '/../..' . '/inc/setup.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IDG\\Ads\\' => 8,
        ),
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IDG\\Ads\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'IDG\\Third_Party\\Base_Data_Layer' => __DIR__ . '/../..' . '/inc/class-base-data-layer.php',
        'IDG\\Third_Party\\Bounce_X' => __DIR__ . '/../..' . '/inc/class-bounce-x.php',
        'IDG\\Third_Party\\CMP' => __DIR__ . '/../..' . '/inc/class-cmp.php',
        'IDG\\Third_Party\\GPT\\Ad_Slots' => __DIR__ . '/../..' . '/inc/gpt/class-ad-slots.php',
        'IDG\\Third_Party\\GPT\\Ad_Targeting' => __DIR__ . '/../..' . '/inc/gpt/class-ad-targeting.php',
        'IDG\\Third_Party\\GPT\\Ad_Templates' => __DIR__ . '/../..' . '/inc/gpt/class-ad-templates.php',
        'IDG\\Third_Party\\GTM' => __DIR__ . '/../..' . '/inc/class-gtm.php',
        'IDG\\Third_Party\\Ias' => __DIR__ . '/../..' . '/inc/class-ias.php',
        'IDG\\Third_Party\\Loader' => __DIR__ . '/../..' . '/inc/class-loader.php',
        'IDG\\Third_Party\\Nativo' => __DIR__ . '/../..' . '/inc/class-nativo.php',
        'IDG\\Third_Party\\Outbrain' => __DIR__ . '/../..' . '/inc/class-outbrain.php',
        'IDG\\Third_Party\\Permutive' => __DIR__ . '/../..' . '/inc/class-permutive.php',
        'IDG\\Third_Party\\Settings' => __DIR__ . '/../..' . '/inc/class-settings.php',
        'IDG\\Third_Party\\Subscribers' => __DIR__ . '/../..' . '/inc/class-subscribers.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b5ad2496a4409b5167f3a5b99bd159d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b5ad2496a4409b5167f3a5b99bd159d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b5ad2496a4409b5167f3a5b99bd159d::$classMap;

        }, null, ClassLoader::class);
    }
}
