<?php
namespace app\index\controller;


use think\Db;

class Index extends Basic
{
    public function index()
    {
        $this->assign('nav', 'home');
        return $this->fetch();
    }

    public function message()
    {
        if ($this->request->isPost()) {
            $param = $this->request->post();
            $param = clean_input($param);

            $validate = validate('Message');
            $res = $validate->scene('message')->check($param);

            if (!$res) {
                $this->result('',600, $validate->getError(),'json');
            } else {
                $id = Db::table('message')->insertGetId($param);
                if ($id) {
                    $this->result('', 200, 'success', 'json');
                }

            }
        } else {
            $this->result('', 600, 'errorParam');
        }
    }
}
