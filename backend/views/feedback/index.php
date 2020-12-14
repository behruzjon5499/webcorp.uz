<?php

use common\helpers\FeedbackHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Feedbacks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-index">


    <p>
        <?= Html::a(Yii::t('app', 'Create Feedback'), ['create'], ['class' => 'btn btn-success']) ?>
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
            'full_name',
            'email:email',
            'phone',
            [
                'attribute' => 'status',
                'filter' => \common\helpers\FeedbackHelper::statusList(),
                'value' => function (\common\models\Feedback $model) {
                    return FeedbackHelper::statusLabel($model->status);
                },
                'format' => 'raw',
            ],
//            'description_ru:ntext',
            //'description_uz:ntext',
            //'description_en:ntext',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div>
    </div>

</div>
