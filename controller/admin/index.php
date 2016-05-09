<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/13 17:17
 */



class controller_admin_index extends controller{

    public function __construct(){
        //admin router
        require_once(CONFIG_DIR.'/admin_nav.php');
//        var_dump(json_decode(_ADMIN_NAV));exit;
        $this->multi_data(array(
            'site_title'=>'管理中心',
            'current_user'=>'Jone',
            'copy_right' => '@personal Jone 2016-2016',
            '_top_menu' => unserialize(_ADMIN_NAV),
        ));
//        kernel::get_class('lib_main_login')->check_login();
    }

    public function index(){
//        print_r($_GET);exit;
        $this->dashboard();
//        $this->display('front/index.html');
    }

    //default :  dashboard view
    public function dashboard(){
        $this->set_current_nav('dashboard');
        $this->display('admin/dashboard/index.html');
    }

    public function def(){
        $this->display('admin/dashboard/index.html');
    }

    public function set_current_nav($key){
        $nav = unserialize(_ADMIN_NAV);
        if($nav[$key]){
            $nav[$key]['active'] = true;
        }else{
            throw exception;
        }
        $this->data('_top_menu',$nav);
    }

}