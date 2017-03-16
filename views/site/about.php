<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use macgyer\yii2materializecss\widgets\Button;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
    <a class="waves-effect waves-light btn">button</a>


    <code><?= __FILE__ ?></code>
</div>
