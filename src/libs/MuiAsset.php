<?php
/**
 * 描述：
 * Created at 2021/3/23 11:07 by 陈庙琴
 */

namespace oba_mui_style\libs;


class MuiAsset
{
    public static function render($filename)
    {
        $extension = self::getExtension($filename);
        $app = $_REQUEST['app'];
        $controller = explode('@', $app)[0];
        if ($extension === 'css') {
            echo '<link type="text/css" rel="stylesheet" href="?app=' . $controller . '@mui_asset_get&f=' . $filename . '" />';
        } else if ($extension === 'js') {
            echo '<script type="text/javascript" src="?app=' . $controller . '@mui_asset_get&f=' . $filename . '"></script>';
        }

        echo "\n";
    }

    public static function get($filename)
    {
        $extension = self::getExtension($filename);

        header('Content-Type:' . self::getContentType($extension));

        @readfile(__DIR__ . '/../assets/' . $extension . '/' . $filename);
    }

    /**
     * 功能：获取文件扩展名
     * Created at 2021/3/23 11:11 by 陈庙琴
     * @param $filename
     * @return 0
     */
    private static function getExtension($filename)
    {
        $extension = array_reverse(explode('.', $filename))[0];

        return $extension;
    }

    /**
     * 功能：获取文件ContentType
     * Created at 2021/3/23 11:11 by 陈庙琴
     * @param $extension
     * @return mixed|string
     */
    private static function getContentType($extension)
    {
        $map = [
            'js' => 'text/javascript',
            'css' => 'text/css',
        ];

        return isset($map[$extension]) === true ? $map[$extension] : '';
    }
}