<?php
namespace app\admin\controller;

use think\Controller;
class index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
          }
}