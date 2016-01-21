<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/14 9:34
 */

function router_map($key){
    $routerMap = array(
        '/' => 'front_index@index',
        '/index.php' => 'front_index@index',
        'admin' => 'admin_index@index',
        'admin_login' => 'admin_main_login@index',
        'login' => 'front_login@login',
        'register' => 'front_login@register',
//        'api' => 'api_index@index',
    );
    return $routerMap[$key];
}