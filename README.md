yii2 web excel
==============

文档：https://bossanova.uk/jexcel/v3/examples/column-types

安装
```
composer require --prefer-dist lengnuan/yii2-jexcel "*"
```

或

```
"lengnuan/yii2-jexcel": "*"
```

用法：
-----

```php
<?= \lengnuan\jexcel\Jexcel::widget(['options' => [
        'minDimensions' => [10,10],
        'tableOverflow' => true
]]);?>

```

或

```php
<?php $data = [
    ['US', 'Cheese', 'Yes', '2019-02-12'],
    ['CA;US;UK', 'Apples', 'Yes', '2019-03-01'],
    ['CA;BR', 'Carrots', 'No', '2018-11-10'],
    ['BR', 'Oranges', 'Yes', '2019-01-12'],
];
echo \lengnuan\jexcel\Jexcel::widget(['options' => [
        'data' => $data,
]]);?>

```