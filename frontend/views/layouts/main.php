<?php

/* @var $this \yii\web\View */
/* @var $foydali \common\models\FoydaliHavolalar */
/* @var $content string */

use common\helpers\LangHelper;
use common\helpers\LanguageHelper;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$lang = Yii::$app->session->get('lang');
if ($lang == '') $lang = 'ru';
$link = 'link_' . $lang;
$title = 'title_' . $lang;
$text = 'text_' . $lang;
$name = 'name_' . $lang;
$descr = 'descr_' . $lang;
$link = 'link_' . $lang;
$material = 'material_' . $lang;
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody()
?>

<header id="header" class="header-scrolled" >
    <div class="container-fluid">
        <div id="logo" class="pull-left">
            <h1><a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="scrollto">WebCorp <br> Colsulting LLC</a></h1>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class=""><a href="<?= \yii\helpers\Url::to(['site/index']) ?>"><?= Yii::t('app', 'Bosh sahifa') ?></a></li>
                <li><a href="<?= \yii\helpers\Url::to(['site/about']) ?>"><?= Yii::t('app', 'Biz haqimizda') ?></a></li>
                <li><a href="<?= \yii\helpers\Url::to(['portfolio/index']) ?>"><?= Yii::t('app', 'Portfolio') ?></a></li>
                <li><a href="<?= \yii\helpers\Url::to(['services/index']) ?>"><?= Yii::t('app', 'Xizmatlar') ?></a></li>

<!--                <li class="menu-has-children"><a href="">Drop Down</a>-->
<!--                    <ul>-->
<!--                        <li><a href="#">Drop Down 1</a></li>-->
<!--                        <li><a href="#">Drop Down 3</a></li>-->
<!--                        <li><a href="#">Drop Down 4</a></li>-->
<!--                        <li><a href="#">Drop Down 5</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
                <li><a href="<?= \yii\helpers\Url::to(['feedback/create']) ?>"><?= Yii::t('app', 'Bog`lanish') ?></a></li>

                <li><a href="/uz"> <img style="width: 20px; height: 20px;" src="/img/uzb.jpg" alt=""></a></li>

                <li><a href="/ru" > <img style="width: 20px; height: 20px;" src="/img/russian.png"  alt=""> </a></li>

                <li><a href="/en"><img  style="width: 20px; height: 20px;" src="/img/english.png" alt=""> </a></li>
            </ul>
        </nav>
    </div>
</header>
<?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>WebCorp <br> Colsulting LLC</h3>
                    <p style="color: white;">Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4><?= Yii::t('app', 'Foydali manzillar') ?></h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="<?= \yii\helpers\Url::to(['site/index']) ?>"><?= Yii::t('app', 'Bosh sahifa') ?></a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="<?= \yii\helpers\Url::to(['site/about']) ?>"><?= Yii::t('app', 'About us') ?></a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="<?= \yii\helpers\Url::to(['portfolio/index']) ?>"><?= Yii::t('app', 'Portfolio') ?></a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="<?= \yii\helpers\Url::to(['services/index']) ?>"><?= Yii::t('app', 'Services') ?></a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="<?= \yii\helpers\Url::to(['feedback/create']) ?>"><?= Yii::t('app', 'Contacts') ?></a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4><?= Yii::t('app', 'Bog`lanish') ?></h4>
                    <p style="color: white;">
                        Toshkent Shaxar <br>
                        Yunusobod tuman<br>
                        A108 uy<br>
                        <strong><?= Yii::t('app', 'Telefon') ?>:</strong> +99890 951-54-99<br>
                        <strong><?= Yii::t('app', 'Email') ?>:</strong> webcorp@gmail.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4><?= Yii::t('app', 'Bizning yangi xatlar') ?></h4>
                    <p style="color: white;">Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                </div>

            </div>
        </div>
    </div>

</footer><!-- #footer -->
<style>
    .yii-debug-toolbar_position_bottom{
        display: none !important;
    }
</style>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
