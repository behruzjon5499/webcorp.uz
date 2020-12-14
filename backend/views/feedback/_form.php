<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Feedback */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feedback-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6"></div>
    </div>


    <?= $form->field($model, 'description_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_en')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
