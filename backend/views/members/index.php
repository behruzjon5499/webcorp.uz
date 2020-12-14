<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Members');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="members-index">


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
                'attribute' => 'full_name',
                'value' => function (\common\models\Members $model) {
                    return Html::a($model->full_name, ['members/view', 'id' => $model->id]);
                },
                'format' => 'raw',
            ],
            'lovozimi',
            'phone',
//            'photo',
            //'telegram',
            //'instagram',
            //'facebook',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div>
    </div>

</div>
