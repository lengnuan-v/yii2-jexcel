<?php
// +----------------------------------------------------------------------
// | jexcel
// +----------------------------------------------------------------------
// | User: Lengnuan <25314666@qq.com>
// +----------------------------------------------------------------------
// | Date: 2019年12月30日
// +----------------------------------------------------------------------

namespace lengnuan\jexcel;

use yii\web\AssetBundle;

class JexcelAsset extends AssetBundle
{

    public $sourcePath = __DIR__;

    public $css = [
        'jexcel/dist/jexcel.css',
        'jsuites/dist/jsuites.css'
    ];

    public $js = [
        'jexcel/dist/jexcel.js',
        'jsuites/dist/jsuites.js'
    ];
}
