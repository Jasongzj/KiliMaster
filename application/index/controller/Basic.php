<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2017/9/16
 * Time: 16:57
 */

namespace app\index\controller;


use think\Controller;
use think\Request;
use think\Url;

class Basic extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct( $request );
        Url::root('/index.php');
    }
}