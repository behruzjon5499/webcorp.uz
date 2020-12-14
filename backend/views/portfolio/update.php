<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Portfolio */

$this->title = Yii::t('app', 'Update Portfolio: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Portfolios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="portfolio-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
