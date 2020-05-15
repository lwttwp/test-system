<?php
// +----------------------------------------------------------------------
// | YFCMF [ WE CAN DO IT MORE SIMPLE]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 http://yfcmf.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: rainfer <rainfer520@qq.com>
// +----------------------------------------------------------------------
namespace app\home\controller;

use app\common\controller\Common;
use think\facade\App;

/*
 * 前台控制器
 * @Author: rainfer <rainfer520@qq.com>
 */

class Index extends Common
{
    /*
     * 首页
     */
    public function index()
    {
        return $this->fetch();
    }
}
