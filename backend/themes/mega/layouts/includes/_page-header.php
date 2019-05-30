<?php

use yii\helpers\Html; ?>
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10"><?= Html::encode($this->title) ?></h5>
                    <p class="m-b-0">Today is: <?= date('d M-Y') ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <?=
                \yii\widgets\Breadcrumbs::widget([
                    'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n", // template for all links,
                    'activeItemTemplate' => "<li class='breadcrumb-item active'>{link}</li>",
                    'tag' => 'ul',
                    'options' => [
                        'class' => 'breadcrumb'
                    ],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]); ?>

                <!--
                <ul class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                    </li>
                </ul>
                -->
            </div>
        </div>
    </div>
</div>
