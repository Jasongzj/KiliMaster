<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2017/9/18
 * Time: 11:05
 */

namespace app\admin\controller;


use page\Page;
use think\Controller;
use think\Db;

class Message extends Basic
{
    public function index()
    {
        $list = Db::table('message')->where('is_delete','0')->order('create_time', 'desc')->select();

        $p = new Page($list, 15);
        $this->assign('p', $p);
        return $this->fetch();
    }


    public function del()
    {
        $post = $this->request->post();
        $msgIds = array_unique((array)$post['id']);
        if (!empty($msgIds)) {
            $map = array(
                'id' => array('in', $msgIds)
            );
            Db::table('message')->where($map)->update($post);

            $this->result('', '200','删除成功','json');
        } else {
            $this->result('', '600','参数错误！','json');
        }
    }
}