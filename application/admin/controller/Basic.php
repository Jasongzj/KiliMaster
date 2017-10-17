<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2017/10/12
 * Time: 0:05
 */

namespace app\admin\controller;


use think\Controller;
use think\Request;
use think\Session;

class Basic extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->_init();
    }

    public function _init()
    {
        $isLogin = $this->isLogin();
        if (!$isLogin) {
            $this->redirect('/index.php/admin/login');
        }
    }


    public function isLogin()
    {
        $user = $this->getLoginUser();
        if ($user && is_array($user)) {
            return true;
        } else {
            return false;
        }
    }

    public function getLoginUser()
    {
        return Session::get('admin');
    }
}