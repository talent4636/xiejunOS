<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/14 9:34
 */

function router($key){
    $routerMap = array(
        '/' => 'front_index@index',
        '/index.php' => 'front_index@index',
    );
    return $routerMap[$key];
}