<?php
namespace app\admin\controller;

use think\Controller;
class login extends Controller
{
    public function index()
    {
        $this->view->engine->layout(false);
        return $this->fetch('index');
    }
}