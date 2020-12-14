<?php

/* @var $this yii\web\View */
/* @var $categories \common\models\Categories */
/* @var $portfolio \common\models\Portfolio */
/* @var $members \common\models\Members */
/* @var $skill \common\models\Skill */
/* @var $abouts \common\models\About */
/* @var $services \common\models\Services */
/* @var $newstop \common\models\News */
/* @var $lovozimi \common\models\Members */
/* @var $sliders \common\models\Sliders */

/* @var $slayd \common\models\Sliders */


use common\helpers\LanguageHelper;
use common\models\User;

$this->title = 'Web Corp.uz';

$lang = Yii::$app->session->get('lang');
if ($lang == '') $lang = 'ru';

$title = 'title_' . $lang;
$text = 'text_' . $lang;
$name = 'name_' . $lang;
$descr = 'descr_' . $lang;
$link = 'link_' . $lang;
$material = 'material_' . $lang;

?>
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="/uploads/sliders/<?= $slayd->photo ?>" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2><?= LanguageHelper::get($slayd, 'title') ?></h2>
                            <p>  <?= LanguageHelper::get($slayd, 'description') ?></p>
                        </div>
                    </div>
                </div>

                <?php foreach ($sliders as $slider): ?>
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="/uploads/sliders/<?= $slider->photo ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2><?= LanguageHelper::get($slider, 'title') ?></h2>
                                <p>  <?= LanguageHelper::get($slider, 'description') ?></p>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- #intro -->
<main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 box">
                    <i class="ion-ios-bookmarks-outline"></i>
                    <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                        sint occaecati cupiditate non provident</p>
                </div>

                <div class="col-lg-4 box box-bg">
                    <i class="ion-ios-stopwatch-outline"></i>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat tarad limino ata</p>
                </div>

                <div class="col-lg-4 box">
                    <i class="ion-ios-heart-outline"></i>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur</p>
                </div>

            </div>
        </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3><?= Yii::t('app', 'Biz haqimizda') ?></h3>
                <p>Zamonaviy va qonun talablariga mos bo'lgan veb sayt yaratish xizmati</p>
            </header>

            <div class="row about-cols">
                <?php foreach ($abouts as $about): ?>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="/uploads/about/<?= $about->photo ?>" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#"><?= LanguageHelper::get($about, 'title') ?></a></h2>
                            <p>
                                <?= LanguageHelper::get($about, 'description') ?>
                            </p>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp">
                <h3><?= Yii::t('app', 'Xizmatlar') ?></h3>
                <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant
                    vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta
                    zanos paradigno tridexa panatarel.</p>
            </header>

            <div class="row">
                <?php foreach ($services as $service): ?>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                        <h4 class="title"><a
                                    href="<?= yii\helpers\Url::to(['services/view', 'id' => $service->id]) ?>"><?= LanguageHelper::get($service, 'title') ?></a>
                        </h4>
                        <p class="description"><?= LanguageHelper::get($service, 'description') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.</p>
            <a class="cta-btn" href="<?= yii\helpers\Url::to(['feedback/create']) ?>">Call To Action</a>
        </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
        <div class="container">

            <header class="section-header">
                <h3><?= Yii::t('app', 'Bizning Natijalar') ?></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip</p>
            </header>

            <div class="skills-content">
                <?php foreach ($skill as $s): ?>
                    <div class="progress">
                        <div class="progress-bar bg-<?=$s->color?>" role="progressbar" aria-valuenow="<?= $s->foiz ?>"
                             aria-valuemin="0"
                             aria-valuemax="<?= $s->foiz ?>">
                            <span class="skill"><?= LanguageHelper::get($s, 'title') ?> <i
                                        class="val"><?= $s->foiz ?>%</i></span>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section>
    <section id="portfolio" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title"><?= Yii::t('app', 'Bizning ishlar') ?></h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters" class="box">
                        <li data-filter="*" class="filter-active"><?= Yii::t('app', 'Barchasi') ?></li>
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
                                <img src="/uploads/portfolio/<?= $p->photo ?>" class="img-fluid" alt="">
                                <a href="/uploads/portfolio/<?= $p->photo ?>" data-lightbox="portfolio"
                                   data-title="App 1"
                                   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="<?= yii\helpers\Url::to(['portfolio/view', 'id' => $p->id]) ?>"
                                   class="link-details" title="More Details"><i
                                            class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4>
                                    <a href="<?= yii\helpers\Url::to(['portfolio/view', 'id' => $p->id]) ?>"><?= LanguageHelper::get($p, 'title') ?></a>
                                </h4>
                                <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($p, 'description'), 30, '...'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <header class="section-header">
                <h3><?= Yii::t('app', 'Biznig hamkorlar') ?></h3>
            </header>
            <div class="owl-carousel clients-carousel">
                <img src="/img/clients/client-1.png" alt="">
                <img src="/img/clients/client-2.png" alt="">
                <img src="/img/clients/client-3.png" alt="">
                <img src="/img/clients/client-4.png" alt="">
                <img src="/img/clients/client-5.png" alt="">
                <img src="/img/clients/client-6.png" alt="">
                <img src="/img/clients/client-7.png" alt="">
                <img src="/img/clients/client-8.png" alt="">
            </div>
        </div>
    </section><!-- #clients -->


    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3><?= Yii::t('app', 'Bizning Jamoa') ?></h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">

                <?php foreach ($members as $member): ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="/uploads/members/<?= $member->photo ?>" style="height: 260px !important;"
                                 class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?= $member->full_name ?></h4>
                                    <span><?= $member->lovozimi ?></span>
                                    <div class="social">
                                        <a href="<?= $member->telegram ?>"><i class="fa fa-telegram"></i></a>
                                        <a href="<?= $member->instagram ?>"><i class="fa fa-instagram"></i></a>
                                        <a href="<?= $member->facebook ?>"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- #team -->

</main>
