<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02721bd0096cb0aea825691e963470c6
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02721bd0096cb0aea825691e963470c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02721bd0096cb0aea825691e963470c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02721bd0096cb0aea825691e963470c6::$classMap;

        }, null, ClassLoader::class);
    }
}