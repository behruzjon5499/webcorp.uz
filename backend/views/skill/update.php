<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Skill */

$this->title = Yii::t('app', 'Update Skill: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Skills'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="skill-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
