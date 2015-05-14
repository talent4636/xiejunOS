<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/13 16:17
 */

function autoloader($class_name){
    $p = strpos($class_name,'_');
    if($p){
        $param = explode('_',$class_name);
        $num = count((array)$param);
        $path = '';
        for($i=0;$i<$num-1;$i++){
            $path .= ($param[$i].'/');
        }
        $path .= $param[$num-1].'.php';
        if(file_exists(ROOT_DIR.'/'.$path)){
            @require(ROOT_DIR.'/'.$path);
        }
    }
}