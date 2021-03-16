<?php
/**
 * 描述：
 * Created at 2021/3/16 8:44 by 陈庙琴
 */

namespace oba_mui_style\libs\trait_set;


use oba_mui_style\mui_controller;

class MTrait
{
    public function init()
    {
        (new mui_controller())->init();
    }
}