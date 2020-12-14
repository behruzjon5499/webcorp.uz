<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Skill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skill-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'foiz')->textInput() ?>

        <?= $form->field($model, 'color')->textInput() ?>
    </div>
    <div class="col-md-6"></div>
</div>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
