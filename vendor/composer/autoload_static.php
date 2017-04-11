<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c7ec283942aa90871a23f4af2333c37
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SRAG\\ILIAS\\Plugins\\LearningObjectiveSuggestionsUI\\' => 50,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SRAG\\ILIAS\\Plugins\\LearningObjectiveSuggestionsUI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c7ec283942aa90871a23f4af2333c37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c7ec283942aa90871a23f4af2333c37::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}