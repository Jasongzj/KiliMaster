<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2017/9/16
 * Time: 15:54
 */

namespace app\index\controller;


class About extends Basic
{
    public function aboutTan()
    {
        $this->assign('nav', 'tanzania');
        return $this->fetch();
    }

    public function aboutUs()
    {
        $this->assign('nav', 'aboutus');
        return $this->fetch();
    }

    public function events()
    {
        $this->assign('nav', 'tanzania');
        return $this->fetch();
    }

}