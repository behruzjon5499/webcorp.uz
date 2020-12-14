<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SkillSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Skills');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skill-index">


    <p>
        <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box">
        <div class="body-box">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

//            'id',
                    'title_ru',
                    'title_uz',
                    'title_en',
                    'foiz',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

        </div>

    </div>


</div>
