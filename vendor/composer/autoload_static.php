<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3f800baf94343022b54fb75faf7280b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3f800baf94343022b54fb75faf7280b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3f800baf94343022b54fb75faf7280b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
