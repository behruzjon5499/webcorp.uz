<?php

namespace frontend\controllers;

use common\models\Categories;
use common\models\Portfolio;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * DocumentController implements the CRUD actions for Document model.
 */
class PortfolioController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Document models.
     * @return mixed
     */
    public function actionIndex()
    {
        $portfolio = Portfolio::find()->all();
        $categories = Categories::find()->all();
        return $this->render('index', [
            'portfolio' => $portfolio,
            'categories' => $categories
        ]);
    }

    public function actionView($id)
    {
        $portfolio = Portfolio::find()->where(['id' => $id])->one();
        $portfolios = Portfolio::find()->all();
        return $this->render('view', [
            'portfolios' => $portfolios,
            'portfolio' => $portfolio
        ]);
    }
}
