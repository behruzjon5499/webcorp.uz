<?php

/* @var $this yii\web\View */

use common\helpers\LanguageHelper;
use common\models\Services;

/* @var $portfolio Services */

?>
<style>
    @media (max-width: 556px) {
        img   {
            padding: 0 30px;
        }
    }
</style>
<div id="about" class="box" style="margin-top:50px;  width: 100%; height: 100%;">
    <div class="container">
        <div class="row" style="text-align: center;">

            <h4 style="font-size: 40px; text-align: center;"><?= LanguageHelper::get($portfolio, 'title') ?></h4>

            <img src="/uploads/portfolio/<?= $portfolio->photo ?>" alt="" style="width: 100%; height: 400px;">

            <p style="margin-top: 30px;"><?= LanguageHelper::get($portfolio, 'description'); ?></p>

        </div>
    </div>
</div>