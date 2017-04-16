<?php
/**
 * Created by PhpStorm.
 * User: xiaomin
 * Date: 17-4-16
 * Time: 下午3:03
 */
namespace app\admin\controller;
use think\Request;
use think\View;

class Index{
    public function index(){
        $request = Request::instance();

        var_dump($request->only('id'));
        return \view();
    }
}