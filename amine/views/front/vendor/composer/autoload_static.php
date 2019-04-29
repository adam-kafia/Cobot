<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41c42f243791dbb8946e8461c8da87de
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41c42f243791dbb8946e8461c8da87de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41c42f243791dbb8946e8461c8da87de::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
