<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f538b65f76fa7fa8d9c43af7001e5b1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f538b65f76fa7fa8d9c43af7001e5b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f538b65f76fa7fa8d9c43af7001e5b1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
