<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/13 10:13
 */
class kernel{

    static $db;

    public static function init(){
        try{
            if(file_exists(ROOT_DIR.'/config/config.php')){
                require(ROOT_DIR . '/config/config.php');
                if(defined('DEBUG_PHP') && DEBUG_PHP){
                    if (!ini_get('display_errors')) {
                        ini_set('display_errors', '1');
                    }
                }
            }
            if(file_exists(PLUGIN_DIR.'/smarty/Smarty.class.php')){
                require(PLUGIN_DIR . '/smarty/Smarty.class.php');
            }
            //FOR DEBUG
            if(file_exists(ROOT_DIR.'/xxx/aaa.php')){
                require(ROOT_DIR . '/xxx/aaa.php');
            }//END
            if(file_exists(dirname(__FILE__) . '/autoload.php')){
                require(dirname(__FILE__) . '/autoload.php');
                spl_autoload_register('autoloader');
            }
            //require base controller/lib/model/router
            require(ROOT_DIR.'/controller/controller.php');
            require(ROOT_DIR.'/lib/lib.php');
            require(ROOT_DIR.'/model/model.php');
            require(ROOT_DIR.'/lib/base/router.php');
            require(ROOT_DIR.'/lib/base/view.php');
            //end
            router::init();
        }catch(Exception $e){
            //TODO
//            var_dump($e);exit;
            exit($e);
        }
    }

    public static function get_class($class_name){
        return new $class_name();
    }

    //单例模式，database
    static function database(){
        if(!self::$db){
            $db = kernel::get_class('base_db_connections');//base_db_connections
            self::$db = $db;
        }
        return self::$db;
    }

    //拼接url，根据key  eg. $key = ""
    static function url($key){
        //
    }


}