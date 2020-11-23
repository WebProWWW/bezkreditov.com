<?php

namespace app\controllers;

use app\models\FormLoginAdmin;
use Yii;
use yii\filters\Cors;
use yii\filters\ContentNegotiator;
use yii\web\Controller;
use yii\web\Response;
use yii\web\NotFoundHttpException;
use Throwable;

use app\components\Access;
use app\dashboard\Action;
use yii\filters\AccessControl;

/**
 * Class AdminController
 * @package app\controllers
 *
 * @property bool $isAuth
 */
class AdminController extends Controller
{
    const LOGIN_URL = ['admin/login'];
    public $enableCsrfValidation = false;
    public $layout = false;

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
//            [
//                'class' => Cors::class,
//            ],
            'access' => [
                'class' => AccessControl::class,
                'denyCallback' => function () {
                    Yii::$app->user->logout();
                    Yii::$app->response->redirect(self::LOGIN_URL);
                },
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        //'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'roles' => [Access::ROLE_ADMIN],
                    ]
                ]
            ],
            [
                'class' => ContentNegotiator::class,
                'except' => ['index', 'app', 'login', 'logout'],
                'formats' => ['application/json' => Response::FORMAT_JSON]
            ],
        ];
    }

    /**
     * @inheritDoc
     */
    public function goHome()
    {
        return $this->redirect(['admin/app']);
    }

    /**
     * @return bool
     */
    protected function getIsAuth()
    {
        $user = Yii::$app->user;
        return !$user->isGuest && $user->identity->role === Access::ROLE_ADMIN;
    }

    /**
     * @return Response
     */
    public function actionIndex()
    {
        if ($this->isAuth) return $this->goHome();
        return $this->redirect(self::LOGIN_URL);
    }

    /**
     * APP
     */
    public function actionApp()
    {
        return $this->render('index', ['view' => '-app']);
    }

    /**
     * LOGIN
     */
    public function actionLogin()
    {
        if ($this->isAuth) return $this->goHome();
        $model = new FormLoginAdmin();
        if ($model->load(Yii::$app->request->post()) and $model->login()) {
            $this->redirect('index');
        }
        return $this->render('index', [
            'view' => '-login',
            'formLogin' => $model,
        ]);
    }

    /**
     * LOGOUT
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('login');
    }

    /**
     * LIST
     * @param string $model
     * @throws NotFoundHttpException
     */
    public function actionList(string $model)
    {
        return Action::list($model);
    }

    /**
     * @param string $model
     * @param int|string $id
     * @throws NotFoundHttpException
     */
    public function actionUpdate(string $model, int $id)
    {
        return Action::update($model, $id);
    }

    /**
     * @param string $model
     * @throws NotFoundHttpException
     */
    public function actionCreate(string $model)
    {
        return Action::create($model);
    }

    /**
     * @param string $model
     * @param int|string $id
     * @throws NotFoundHttpException|Throwable
     */
    public function actionRemove(string $model, int $id)
    {
        return Action::remove($model, $id);
    }
}