<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2017/9/18
 * Time: 11:27
 */

namespace app\index\validate;


use think\Validate;

class Message extends Validate
{
    protected $rule = [
        ['message', 'require', 'messageRequired'],
        ['name', 'require', 'nameRequired'],
        ['email', 'require|email', 'emailRequired|emailUnformat'],
    ];

    /**
     * 场景设置
     */
    protected $scene = [
        'message' => ['name', 'email', 'message']

    ];
}