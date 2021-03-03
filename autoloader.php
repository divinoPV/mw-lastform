<?php

/**
 * Simple autoloader, pas besoin de Composer
 */
final class AutoloaderLastform
{
    public static function autoloaderMw()
    {
        spl_autoload_register(function ($class) {
            if (0 === strpos($class, 'App\\'))
            {
                $class = substr_replace($class, 'function', 0, 3);
                $class = __DIR__.'\\'.$class;
            }

            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

            if (file_exists($file)) {
                require $file;

                return true;
            }
            return false;
        });
    }
}
AutoloaderLastform::autoloaderMw();

if  ( ! function_exists('lastform_autoload_plugin_classes') ) {
    function lastform_autoload_plugin_classes($class_name) {
        // Get class parts
        $class_name          = strtolower($class_name);
        $exploded_class_name = explode('_', $class_name);

        // If is not a Lastform class, stop the autoload
        $plugin              = $exploded_class_name[0];
        if('lastform' != $plugin) return null;

        // Check the class folder
        $class_name_suffix   = end($exploded_class_name);
        if('admin' == $class_name_suffix) {
            $folder = 'admin';
        } else if('public' == $class_name_suffix) {
            $folder = 'public';
        } else {
            $folder = 'includes';
        }

        // Class name to file name
        $file_name           = 'class-' . str_replace('_', '-', $class_name) . '.php';
        $file_with_path      = plugin_dir_path( __FILE__ ) . $folder . '/' . $file_name;

        require_once $file_with_path;
    }
}
spl_autoload_register('lastform_autoload_plugin_classes');