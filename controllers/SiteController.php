<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\CreateUser;
use app\models\UserPanel;
use app\models\UserRole;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
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
     * @return string
     */
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['site/dashboard']);
        }
        else
        {
            return $this->redirect(['site/login']);
        }
        // return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionDashboard()
    {

        if (User::isAdmin() || User::isPanel()) {
            return $this->render('dashboard');
        }
        return $this->redirect('site/login');
    }
    public function actionAkun()
    {
        $model = new CreateUser();
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            if ($model->id_user_role == 2)
            {
                $panel = new UserPanel();
                $panel->nama = $model->nama;
                $panel->email = $model->email;
                $panel->telp = $model->telp;

                $foto = UploadedFile::getInstance($model, 'foto');
                $model->foto = time(). '_' . $foto->name;
                $foto->saveAs(Yii::$app->basePath. '/web/user/' . $model->foto);
                $panel->foto = $model->foto;
                if (!$panel->save())
                {
                    echo 'Error di panel<br>';
                    var_dump($panel->errors);
                    die;
                }
                

                $userrole = new UserRole();
                $userrole->nama = $model->nama;

                $user = new User();
                $user->id_user = $panel->id;
                $user->id_user_role = $userrole->id;
                $user->username = $model->username;
                $user->password = Yii::$app->getSecurity()->generatePasswordHash($model->password);
                $user->id_user_role = 2;
                $user->status = 1;
                $user->token = Yii::$app->getSecurity()->generateRandomString(100);
                if (!$user->save())
                {
                    echo 'Error di User<br>';
                    var_dump($user->errors);
                    die;
                }

                Yii::$app->session->setFlash('success', 'Berhasil Tambah Akun User Panel.');

                return $this->redirect(['user-panel/index']);
            }
            else {
                return $this->redirect(['site/akun']);
            }
        }
        return $this->render('akun', [
            'model' => $model,
        ]);
    }
}