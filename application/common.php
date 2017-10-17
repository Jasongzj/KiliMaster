<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 过滤传入数据
 */
function clean_input($param)
{
    foreach ($param as $key => $value) {
        if (is_array($value)) {
            $param[$key] = clean_input($value);
        } else {
            $param[$key] = htmlspecialchars($value);
            $param[$key] = trim($param[$key]);
            $param[$key] = stripcslashes($param[$key]);
        }
    }
    return $param;
}

function getMD5Password($password)
{
    return MD5(config('MD5_PRE').$password);
}