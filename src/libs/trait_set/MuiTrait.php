<?php
/**
 * 描述：
 * Created at 2021/3/16 8:44 by 陈庙琴
 */

namespace wenshizhengxin\oba_mui_style\libs\trait_set;


use epii\server\Args;
use epii\server\Tools;
use wenshizhengxin\oba_mui_style\libs\EpiiMuiViewEngine;
use wenshizhengxin\oba_mui_style\libs\MuiAsset;

trait MuiTrait
{
    public function init()
    {
        $engine = new EpiiMuiViewEngine();
        $engine->init(["tpl_dir" => Tools::getVendorDir() . "/../view/", "cache_dir" => Tools::getVendorDir() . "/../runtime/cache/view/", 'replace_key' => '<?php include $tmpfile;?>']);
        $this->setViewEngine($engine);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function mui_asset_get()
    {
        $filename = Args::params('f');
        MuiAsset::get($filename);
    }
}