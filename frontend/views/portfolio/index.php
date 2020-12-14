<?php

/* @var $this yii\web\View */

use abdualiym\language\Language;
use common\helpers\LanguageHelper;

/* @var $portfolio \common\models\Services */
/* @var $categories \common\models\Categories */

?>

<section id="portfolio" class="section-bg" style="margin-top: 50px;">
    <div class="container">

        <header class="section-header">
            <h3 class="section-title"><?= Yii::t('app', 'Bizning ishlar') ?></h3>
        </header>

        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters" class="box">
                    <li data-filter="*" class="filter-active">All</li>
                    <?php foreach ($categories as $category): ?>
                        <li data-filter=".<?= $category->title_ru ?>"><?= LanguageHelper::get($category, 'title') ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">

            <?php foreach ($portfolio as $p): ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?= $p->category->title_ru ?> wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="/uploads/portfolio/<?=$p->photo?>" class="img-fluid" alt="">
                            <a href="/uploads/portfolio/<?=$p->photo?>" data-lightbox="portfolio" data-title="App 1"
                               class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="<?= yii\helpers\Url::to(['portfolio/view', 'id' => $p->id]) ?>" class="link-details" title="More Details"><i
                                    class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="<?= yii\helpers\Url::to(['portfolio/view', 'id' => $p->id]) ?>"><?= LanguageHelper::get($p, 'title') ?></a></h4>
                            <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($p, 'description'), 150, '...'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
