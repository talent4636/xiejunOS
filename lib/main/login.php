<?php

class lib_main_login{

    public $user_name;
    public $role;

    public function __constract(){
        $session = kernel::get_class('lib_main_session');
        $this->user_name = $session->get('username');
        $this->role = $session->get('role');
    }

    public function check_login($user_name, $password, $vcode=""){
        if($this->user_name && $this->role){
            exit('true');
            return true;
        }else{
            exit('false');
            return false;
        }
    }

    public function login($user_name, $password, $vcode=""){
        //varify first
        if(self::check_login($user_name, $password, $vcode="")){
            //set session & cookie
            return true;
        }else{
            return false;
        }
    }

    public function register(){

    }
    
}