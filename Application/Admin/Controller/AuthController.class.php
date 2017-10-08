<?php
namespace Admin\Controller;
use Think\Controller;

class AuthController extends Controller {
    public function _initialize(){
        if($this->checklogin()) return true;
        $this->error('ھاجىم تېخى كىرمەپلا',U('Login/login'),2);
    }

     private function checklogin(){
         if (is_null(session('th_admin'))) return false;
         return true;
     }
}