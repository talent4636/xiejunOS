<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/13 16:34
 */

/**
 * Class controller   base controller
 * all controller's dady.
 */
class controller{

    public $view;

    public function __construct(){
        $this->view = kernel::get_class('view');
    }

    public function index(){
        //
    }

    public function display($dir){
        $this->view->display($dir);
    }

    public function data($k,$v){
        $this->view->set($k,$v);
    }

    //
    public function alert(){
        //
    }

    public function jumpto($url){
        //
    }

//    public function

}