<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1facdf7f63f95c7c32ad68dae58dca4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'CreatePasswordResetsTable' => __DIR__ . '/../..' . '/database/migrations/2014_10_12_100000_create_password_resets_table.php',
        'CreateTasksTable' => __DIR__ . '/../..' . '/database/migrations/2015_10_27_141258_create_tasks_table.php',
        'CreateUsersTable' => __DIR__ . '/../..' . '/database/migrations/2014_10_12_000000_create_users_table.php',
        'DatabaseSeeder' => __DIR__ . '/../..' . '/database/seeds/DatabaseSeeder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1facdf7f63f95c7c32ad68dae58dca4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1facdf7f63f95c7c32ad68dae58dca4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1facdf7f63f95c7c32ad68dae58dca4::$classMap;

        }, null, ClassLoader::class);
    }
}
