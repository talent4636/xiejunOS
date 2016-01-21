<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/13 17:17
 */

class controller_admin_index extends controller{

    public function __construct(){
        kernel::get_class('lib_main_login')->check_login();
    }

    public function index(){
        echo "admin";
    }

}