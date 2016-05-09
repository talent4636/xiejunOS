<?php
/**
 * Created by PhpStorm.
 * User: xiejun
 * Time: 16/5/7 21:18
 */

$_admin_nav = array(
    'dashboard' => array(
        'name' => '概览',
        'default' => '',
        'icon' => 'dashboard',
        'sub_menu' => array(
            'dashboard_1' => array(
                'name' => '概览-1',
                'default' => '',
                ),
            'dashboard_2' => array(
                'name' => '概览-2',
                'default' => '',
            ),
        ),
    ),
    'user' => array(
        'name' => '用户中心',
        'default' => '',
        'icon' => 'user',
    ),
    'content' => array(
        'name' => '文章中心',
        'default' => '',
        'icon' => 'content',
    ),
);

define('_ADMIN_NAV',serialize($_admin_nav));