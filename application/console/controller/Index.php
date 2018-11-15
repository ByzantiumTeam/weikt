<?php
namespace app\console\controller;

use app\console\Base;
use think\Db;

class Index extends Base
{


    /**
     * 登录后台整理框架
     */
    public function index () {
        $this->assign('userinfo', $this->userinfo);
        return $this->fetch('/console/index/index');
    }

    /**
     * 首页页面
     */
    public function main () {
        return $this->fetch('/console/index/main');
    }

    public function sql () {

        Db::query('ALTER TABLE `vcr_curriculum` MODIFY COLUMN `title`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT \'课程标题\' AFTER `id`');
        Db::query('ALTER TABLE `vcr_curriculum_chapter` MODIFY COLUMN `title`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT \'章节名称\' AFTER `cp_id`');
        print_r(1111);
//        foreach ($user as $k=>$v) {
//
//            if($v['nickname'] != base64_encode(base64_decode($v['nickname'])) || $v['nickname'] == 'What') {
////                echo $v['nickname'].PHP_EOL;
//
//                $sql = 'UPDATE vcr_user_basic SET nickname=\'' . base64_encode($v['nickname']) . '\'';
//                $sql .= ' WHERE id=' . $v['id'];
//
//                DB::query($sql);
//
//            }
//        }

//        $_sql = file_get_contents('./weikt_webuildus.sql');
//        $_arr = explode('#', $_sql);
//
//        foreach ($_arr as $_value) {
//            DB::query($_value);
//        }
    }

}
