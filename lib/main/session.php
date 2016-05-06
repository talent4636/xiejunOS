<?php

class lib_main_session{

    /**
     * login_session_data:
     * array(
     *    'role' : admin/member,
     *    'username' : xxxxxxx,
     *    'login_time' : time()
     * )
     */

    public function __construct(){
        session_start();
    }

    //setter
    public function set($key, $value){
        $_SESSION[$key] = $value;
    }
    
    public function get($key=null){
        if(!$key){
            return $_SESSION;
        }else{
            return $_SESSION[$key];
        }
    }

    //what for?
    public function check(){
        
    }

    //delete all session data
    public function destroy(){
        session_destroy();
    }

    public function delete($key){
        unset($_SESSION[$key]);
    }
    
}