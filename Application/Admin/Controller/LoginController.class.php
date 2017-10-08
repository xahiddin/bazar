<?php

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller
{
    public function login()
    {
        $this->display();
    }

    public function loginhandler()
    {
        if (IS_POST) {
            $username = I('post.user_name');
            $password = I('post.password');


            $admin = M('Admin')->where(array('user_name' => $username))->find();
            if (!$admin) $this->error('قىززىق ھە');

            if (md5($password) != $admin['user_password']) $this->error( 'wrong password' );

            session("th_admin",$admin);
            $this->success('ياممان',U('Index/index'),2);

        }
    }
}