<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/13 10:39
 */

function pe($params){
    echo "<pre>";
    print_r($params);
    echo "</pre>";
    die;
    exit;
}

function de($params){
    echo "<pre>";
    var_dump($params);
    echo "</pre>";
    die;
    exit;
}

function elog($params,$mark,$file_name='log.log'){
    error_log("\n============= {$mark} ==============\n".print_r($params,1),3,ROOT_DIR.'/logs/'.$file_name);
    die;
    exit;
}