<?php

use common\models\News;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">


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
            [
                'attribute' => 'title_ru',
                'value' => function (News $model) {
                    return Html::a($model->title_ru, ['news/view', 'id' => $model->id]);
                },
                'format' => 'raw',
            ],
            'title_uz',
            'title_en',
            [
                'attribute'=>'photo',
                'content'=>function($data){
                    return '<img width="150px" src="/uploads/file/'.$data->photo.'">';
                }
            ],
            //'date',
            //'description_ru:ntext',
            //'description_uz:ntext',
            //'description_en:ntext',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div></div>
</div>
