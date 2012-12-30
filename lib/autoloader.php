<?php
namespace MagelingsNetwork;

class Autoloader {
    static public function loader($className) {
        $filename = "/var/www/lib/" . str_replace('\\', '/', $className) . ".php";
        if (file_exists($filename)) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        }
        return FALSE;
    }
}

spl_autoload_register('MagelingsNetwork\Autoloader::loader');