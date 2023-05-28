<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb35a94c73dccb47af6f8060c9aa2b824
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb35a94c73dccb47af6f8060c9aa2b824::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb35a94c73dccb47af6f8060c9aa2b824::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb35a94c73dccb47af6f8060c9aa2b824::$classMap;

        }, null, ClassLoader::class);
    }
}
