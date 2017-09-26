<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2017/9/18
 * Time: 10:58
 */

namespace app\admin\controller;


use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}