<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Members */

$this->title = Yii::t('app', 'Update Members: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Members'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="members-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
