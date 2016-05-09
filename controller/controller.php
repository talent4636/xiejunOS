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
        //for admin
        if(!is_object($this->view)){
            $this->view = kernel::get_class('view');
        }
        $this->view->display($dir);
    }

    public function data($k,$v){
        if(!is_object($this->view)){
            $this->view = kernel::get_class('view');
        }
        $this->view->set($k,$v);
    }

    public function multi_data($data){
        foreach($data as $k => $v){
            $this->data($k,$v);
        }
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