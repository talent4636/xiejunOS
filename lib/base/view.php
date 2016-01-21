<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/14 9:42
 */

/**
 * Class view
 * the base class of all view class. include base functions
 */
class view{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(VIEW_DIR); //设置模板目录
        $this->smarty->setCompileDir(CACHE_DIR."/smarty/templates_c"); //设置编译目录
        $this->smarty->setConfigDir(CONFIG_DIR."/smarty.config.php"); //缓存目录
        $this->smarty->setCacheDir(CACHE_DIR."/smarty/cache"); //缓存目录
        $this->smarty->cache_lifetime = SMARTY_CACHE_TIME; //缓存时间
        $this->smarty->caching = SMARTY_CACHE; //缓存方式
        $this->smarty->left_delimiter = "<{";
        $this->smarty->right_delimiter = "}>";

        //定义一些基础的常用目录变量，给smarty
        $this->smarty->assign('view_dir','/view');
        $this->smarty->assign('css_dir','/view/public/css');
        $this->smarty->assign('image_dir','/view/public/images');
        if(defined('SITE_TITLE')){
            $this->smarty->assign('site_title',SITE_TITLE);
        }else {
            $this->smarty->assign('site_title', 'notDefinedTitle');
        }//END
    }

    public function display($dir){
        if(file_exists(VIEW_DIR.'/'.$dir)){
            $this->smarty->display($dir);
        }else {
            exit("use an unexist Smarty template: {$dir} ");
        }

    }

    public function set($key,$value){
        $this->smarty->assign($key,$value);
    }

}