<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb3c1797e67c0df62a44568ac6a5d739
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bolt\\Tests\\' => 11,
            'Bolt\\Extension\\PandaMadness\\DeviceDetector\\Tests\\' => 49,
            'Bolt\\Extension\\PandaMadness\\DeviceDetector\\' => 43,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bolt\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/bolt/bolt/tests/phpunit/unit',
        ),
        'Bolt\\Extension\\PandaMadness\\DeviceDetector\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Bolt\\Extension\\PandaMadness\\DeviceDetector\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb3c1797e67c0df62a44568ac6a5d739::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb3c1797e67c0df62a44568ac6a5d739::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdb3c1797e67c0df62a44568ac6a5d739::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitdb3c1797e67c0df62a44568ac6a5d739::$classMap;

        }, null, ClassLoader::class);
    }
}