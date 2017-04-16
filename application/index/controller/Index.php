<?php
namespace app\index\controller;

use think\Db;
use think\Request;

class Index
{
    public function index(){
        $data = Db::name('data')
            ->select();
        var_dump($data);
        $request = Request::instance();
        $request->get();

    }
}
