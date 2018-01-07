<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5dcd5a9ac8445ef57c6cf237be1e7d41
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spencerfeng\\NamespaceAutoloadWithComposerDemo\\' => 46,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spencerfeng\\NamespaceAutoloadWithComposerDemo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5dcd5a9ac8445ef57c6cf237be1e7d41::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5dcd5a9ac8445ef57c6cf237be1e7d41::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}