<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<main id="main" style="margin-top: 50px;">
<section id="contact" class="section-bg wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h3><?= Yii::t('app', 'Biz bilan bog`lanish') ?></h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <?php
        if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success">
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php endif; ?>
        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3><?= Yii::t('app', 'Address') ?></h3>
                    <address>A108 Adam Street, NY 535022, USA</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3><?= Yii::t('app', 'Telefon') ?></h3>
                    <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3><?= Yii::t('app', 'Email') ?></h3>
                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
            </div>
        </div>
        <?php
        $form = ActiveForm::begin([
            'id' => 'feedback-form',
            'options' => ['class' => 'form'],
        ]); ?>
        <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
                <div class="form-row">
                    <div class="form-group col-md-6" >
                        <?= $form->field($model, 'full_name')->textInput(['rows' => 6, 'id' => 'exampleFormControlInput1', 'class' => 'form-control', 'style' => 'height:40px;', 'placeholder' => Yii::t('app', 'Full name')])->label(false); ?>
                    </div>
                    <div class="form-group col-md-6" >
                        <?= $form->field($model, 'email')->textInput(['rows' => 6, 'id' => 'exampleFormControlInput1', 'class' => 'form-control', 'style' => 'height:40px;', 'placeholder' => Yii::t('app', 'Email')])->label(false); ?>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 0 !important;">
                    <?= $form->field($model, 'phone')->textInput(['rows' => 6, 'id' => 'exampleFormControlInput1',  'style' => 'height:40px;', 'class' => 'form-control', 'placeholder' => Yii::t('app', 'Phone')])->label(false); ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'description_ru')->textarea(['rows' => 8, 'id' => 'exampleFormControlInput1', 'class' => 'form-control', 'placeholder' => Yii::t('app', 'Введите ваше имя')])->label(false); ?>
                </div>
                <div class="text-center">
                    <?= Html::submitButton(Yii::t('app', 'Submit')) ?>
                </div>

                <?php ActiveForm::end(); ?>


    </div>
    </div>
</section>
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Tashkent%20+(Webcorp.uz)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm">Plan A Journey</a></div>

</main>
