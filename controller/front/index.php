<?php
/**
 * author: talent4636@gmail.com
 *   date: 2015/5/13 17:16
 */

class controller_front_index extends controller{

    public function __construct(){
        parent:: __construct();
    }

    public function index(){
        $member = array(
            '1' => 'aaaaaaaaaa',
            '2' => 'bbbbbbbbbb',
            '3' => 'cccccccccc',
            '4' => 'dddddddddd',
            '5' => 'eeeeeeeeee',
        );
        $this->data('member',$member);
        $this->display('front/index.html');
    }


}