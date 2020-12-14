<?php

/* @var $this yii\web\View */

use abdualiym\language\Language;
use common\helpers\LanguageHelper;

/* @var $services \common\models\Services */

?>

<section id="portfolio" class="section-bg" style="margin-top: 50px;">
    <div class="container">

        <header class="section-header">
            <h3 class="section-title">Our Services</h3>
        </header>

        <div class="row portfolio-container">

            <?php foreach ($services as $service): ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="/uploads/services/<?=$service->photo?>" class="img-fluid" alt="">
                            <a href="/uploads/services/<?=$service->photo?>" data-lightbox="portfolio" data-title="App 1"
                               class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="<?= yii\helpers\Url::to(['services/view', 'id' => $service->id]) ?>" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="<?= yii\helpers\Url::to(['services/view', 'id' => $service->id]) ?>"><?= LanguageHelper::get($service, 'title') ?></a></h4>
                            <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($service, 'description'), 150, '...'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
