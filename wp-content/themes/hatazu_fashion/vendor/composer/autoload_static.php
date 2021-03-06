<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60f7c0b3c0d31fce08ea27ca71d881e2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60f7c0b3c0d31fce08ea27ca71d881e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60f7c0b3c0d31fce08ea27ca71d881e2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
