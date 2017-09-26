<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2017/9/16
 * Time: 22:43
 */

namespace app\index\controller;


class Wildlife extends Basic
{
    public function index()
    {
        $this->assign('nav', 'home');
        return $this->fetch();
    }
}