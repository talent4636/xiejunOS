<?php

class lib_main_login{

    public $user_name;
    public $role;

    public function __constract(){
        $session = kernel::get_class('lib_main_session');
        $this->user_name = $session->get('username');
        $this->role = $session->get('role');
    }

    public function check_login(){
        if($this->user_name && $this->role){
            return true;
        }else{
            return false;
        }
    }

    //$user_name, $password, $vcode=""
    public function login(){
        //varify first
        if(self::check_login()){
            //set session & cookie
            return true;
        }else{
            return false;
        }
    }

    public function register(){
        //
    }
    
}