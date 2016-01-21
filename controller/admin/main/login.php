<?php
/**
 * author: talent4636@gmail.com
 *   date: 2016/1/20 10:35
 */

class controller_admin_main_login extends controller{

    public $controllerDesc = '后台登陆';

    public function index(){
        //login
        if($_POST){
            //varify username & password, login and jump
            $loginResult = kernel::get_class('lib_main_login')->login($_POST['admin_user'], $_POST['admin_pass'], $_POST['admin_vcode']);
            if($loginResult){
                $this->view->display();
            }else{
                $this->view->popupMsg('登陆失败，请重新登陆');
            }
        }else{
            //TODO check login, if logined jump to admin panel
            $this->view->display('admin/login.html');
        }
    }

}