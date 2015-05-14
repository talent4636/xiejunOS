<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/13 10:13
 */
class kernel{

    public static function init(){
        try{
            if(file_exists(ROOT_DIR.'/config/config.php')){
                require(ROOT_DIR . '/config/config.php');
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
            exit($e);
        }
    }

    public static function get_class($class_name){
        return @new $class_name;

    }


}