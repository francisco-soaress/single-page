<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf63f9ebad460049195a8e2fe2cdf5105
{
    public static $files = array (
        '231b9796ca143862d993e7c6f73d6ee5' => __DIR__ . '/../..' . '/Config/Defines.php',
        '8f3c2251ca278148d8c64ff908488c67' => __DIR__ . '/../..' . '/Config/ConfigEmail.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'C' => 
        array (
            'Config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf63f9ebad460049195a8e2fe2cdf5105::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf63f9ebad460049195a8e2fe2cdf5105::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}