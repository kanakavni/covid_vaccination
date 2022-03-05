<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit482d418be819d3deb17c1b6349447255
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit482d418be819d3deb17c1b6349447255::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit482d418be819d3deb17c1b6349447255::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit482d418be819d3deb17c1b6349447255::$classMap;

        }, null, ClassLoader::class);
    }
}
