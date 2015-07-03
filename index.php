<?php

require_once 'app/config/path.php';
require_once 'app/config/database.php';
//require_once 'app/core/smarty/libs/Smarty.class.php';
//require_once '';
require_once 'app/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

function autoload($className)
{
        $dirs = [
                PATH_CORE,
                PATH_CONTROLLER,
                PATH_MODEL
        ];

        foreach($dirs as $dir) {
                $filename = $dir . '/' . $className . '.php';
                if (file_exists($filename)) {
                        require $filename;
                        return TRUE;
                }
        }
        trigger_error('Could not load class: ' . $filename, E_USER_NOTICE);
        return FALSE;
}

spl_autoload_register('autoload');
$app = new AppRouter();