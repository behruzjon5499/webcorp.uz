<?php

namespace frontend\controllers;

use common\models\About;
use common\models\Categories;
use common\models\Gallery;
use common\models\LoginForm;
use common\models\Meeting;
use common\models\Members;
use common\models\Portfolio;
use common\models\Services;
use common\models\Skill;
use common\models\Sliders;
use common\models\User;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\ResetForm;
use frontend\models\ResetPasswordForm;
use frontend\models\UpdateForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\filters\AccessControl;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

//use frontend\models\SignupForm;

/**
 * Site controller
 */
class SiteController extends Controller
{


    public $password = '';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionIndex()
    {
        $slayd = Sliders::find()->where(['status' => 10])->one();
        $sliders = Sliders::find()->all();
        $members = Members::find()->all();
        $abouts = About::find()->all();
        $services = Services::find()->all();
        $portfolio = Portfolio::find()->all();
        $categories = Categories::find()->all();
        $skill = Skill::find()->all();
        return $this->render('index', [
            'members' => $members,
            'sliders' => $sliders,
            'slayd' => $slayd,
            'abouts' => $abouts,
            'services' => $services,
            'portfolio' => $portfolio,
            'categories' => $categories,
            'skill' => $skill
        ]);

    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $contacts = Contacts::find()->all();

        return $this->render('contacts', [

            'contacts' => $contacts,


        ]);

    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $about = About::find()->all();
        return $this->render('about', [
            'abouts' => $about
        ]);
    }


    /**
     * Signs user up.
     *
     * @return mixed
     * @throws \yii\base\Exception
     */

    public function actionSignup()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {
            $model->file = $_POST['User']['file'];
            $model->file = UploadedFile::getInstance($model, 'file');

            $model->file1 = $_POST['User']['file1'];
            $model->file1 = UploadedFile::getInstance($model, 'file1');
            $model->upload();
            $p = $model->password;
            $model->setPassword($p);
            $model->generateAuthKey();
            $model->generateEmailVerificationToken();
            $model->save(false);
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->render('login', [
                'model' => $model,
            ]);
        } else {
//            Yii::$app->session->setFlash('success', 'Iloji bolmadi keyinroq yana urinib koring iltimos');
            return $this->render('signup', [
                'model' => $model,
            ]);
        }


    }

    /**
     * Requests password reset.
     *
     * @return mixed
     * @throws \yii\base\Exception
     */
    public function actionReset()
    {
        $model = new ResetForm();
        $model1 = new UpdateForm();
        $user = User::find()->where(['id' => \Yii::$app->user->getId()])->one();
        if ($model->load(Yii::$app->request->post()) && $model->reset()) {
            $pw = $model->new_password;
            $pwc = $model->new_password;
            if ($pw == $pwc) {
                $user = User::findIdentity(\Yii::$app->user->getId());
                $user->setPassword($pw);
                $user->generateAuthKey();
                $user->password = $pw;
                $user->generateEmailVerificationToken();
                $user->save(false);
                Yii::$app->session->setFlash('success', 'Thank you for reset password');
                return $this->render('index', [
                    'model' => $model,
                    'model1' => $model1
                ]);

            } else {
                Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
                return $this->render('index', [
                    'model' => $model,
                    'model1' => $model1
                ]);
            }


        } else {
//            Yii::$app->session->setFlash('success', 'Thank you ');
//            return $this->render('index', [
//                'model' => $model,
//                'model1' => $model1
//            ]);
        }
        return $this->render('index', [
            'model' => $model,
            'model1' => $model1
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            VarDumper::dump($model,12,true);
//            die();
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.,,opolllllllll
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @return yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionLang($lang = 'ru')
    {
        $ref = Yii::$app->request->referrer;
        $_lang = ['ru', 'uz', 'en']; // допустимые языки
        if (!in_array($lang, $_lang)) $lang = 'ru';
        Yii::$app->session->set('lang', $lang);

        Yii::$app->language = $lang; // установка языка на сайте

        return $this->redirect($ref);
    }

    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
