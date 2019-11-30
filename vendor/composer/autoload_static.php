<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit277c0de3999cf917a17a82f7e8a9ebbc
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'K' => 
        array (
            'Klein\\' => 6,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PhpOption\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpoption/phpoption/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit277c0de3999cf917a17a82f7e8a9ebbc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit277c0de3999cf917a17a82f7e8a9ebbc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit277c0de3999cf917a17a82f7e8a9ebbc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}