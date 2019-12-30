<?php
// +----------------------------------------------------------------------
// | jexcel
// +----------------------------------------------------------------------
// | User: Lengnuan <25314666@qq.com>
// +----------------------------------------------------------------------
// | Date: 2019年12月30日
// +----------------------------------------------------------------------

namespace lengnuan\jexcel;

use lengnuan\jexcel\JexcelAsset;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class Jexcel extends Widget
{
    public $options = [];

    public function init()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    public function run()
    {
        echo Html::tag('div', '', $this->options);
        $this->registerClientScript();
    }

    protected function registerClientScript()
    {
        $id = $this->options['id'];
        unset($this->options['id']);
        $view = $this->getView();
        $options = !empty($this->options) ? Json::encode($this->options) : '{}';
        JexcelAsset::register($view);
        $js = "var jexcel_table = jexcel(document.getElementById(\"{$id}\"), {$options});";
        $view->registerJs($js);
    }
}
