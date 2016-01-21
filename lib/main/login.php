<?php

class lib_main_login{
    
    public function check_login($user_name, $password, $vcode=""){
        //login success
        return true;
        //
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