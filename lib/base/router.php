<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/13 15:28
 */

class router{

    public static function init(){
        $request = self::get_request();
        $trans = self::router_list($request['mark']);
        if($trans){
            $className = 'controller_'.substr($trans,0,strpos($trans,'@'));
            $funcName = substr($trans,strpos($trans,'@')+1);
        }
        $arg = @count((array)$request['args']);
        if ((int)$arg >0){
            @call_user_func_array(array(kernel::get_class($className),$funcName),(array)$request['args']);
        }else {
            @call_user_func_array(array(kernel::get_class($className),$funcName),array());
        }

//        if($r){
//            return $r;
//        }else {
//            exit("something wrong : call {$className} -> {$funcName} ( {$trans['args']} )");
//        }

    }

    //TODO read from config/router.php , not like this
    public static function router_list($key){
        //default  = [controller]
        $routerMap = array(
            '/' => 'front_index@index',
            '/index.php' => 'front_index@index',
        );
        return $routerMap[$key];
    }

    public static function get_request(){
        //default url like : http://www.xxx.com/index.php/admin/userlist-34
        $server = self::http_server();
        $request = @$server['PATH_INFO']?$server['PATH_INFO']:'/';
        if($request == '/'){
            return array(
                'mark' => '/',
                'args' => array(),
            );
        }
        $p = strpos($request,'-');
        if($p){
            $mark = substr($request,1,$p-1);
            $params = substr($request,$p+1);
            $argArr = explode('-',$params);
        }else{
            $mark = substr($request,1);
            $argArr = array();
        }
        return array(
            'mark' => $mark,
            'args' => @(array)$argArr,
        );
    }

    public static function http_server(){
        return $_SERVER;
    }

    public static function real_request(){
        $server = self::http_server();
        return $server['HTTP_HOST'].$server['REQUEST_URI'];
    }

}