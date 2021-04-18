<?php

namespace app\controllers;

use app\models\Arbitration;
use app\models\City;
use app\helpers\Url;
use app\models\Faq;
use app\models\FormCallback;
use app\models\FormConsult;
use app\models\FormContact;
use app\models\FormLogin;
use app\models\FormRegister;
use app\models\FormTest;
use app\models\Fssp;
use app\models\Material;
use app\models\News;
use app\models\Company;
use app\models\User;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Cookie;
use yii\web\NotFoundHttpException;
use yii\web\Request;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * Class SiteController
 * @package app\controllers
 *
 * @property City $city
 */
class SiteController extends Controller
{
    private $_city;

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        Yii::$app->view->params['city'] = $this->city;
        if (!Yii::$app->request->cookies->has('is-city')) {
            Yii::$app->response->cookies->add(new Cookie([
                'name' => 'is-city',
                'value' => 1,
                'domain' => Url::rootDomain(),
                'expire' => time() + 3600 * 24 * 300,

            ]));
            Yii::$app->session->setFlash('is-city', true);
        }
    }

    /**
     * @return string
     */
    public function actionError()
    {
        return $this->render('error', [
            'city' => $this->city,
        ]);
    }

    /**
     * КОРНЕВЫЕ СТРАНИЦЫ (views/site)
     * @param string $view
     */
    public function actionIndex(string $view = 'index')
    {
        return $this->render($view, [
            'city' => $this->city,
        ]);
    }

    /**
     * НОВОСТИ
     * @param string $alias
     * @param int $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionNewsItem(string $alias = '', int $id = null)
    {
        $model = News::findByAlias($alias, $id);
        return $this->render('news-item', [
            'model' => $model,
            'city' => $this->city,
        ]);
    }

    /**
     * ПОЛЕЗНЫЕ МАТЕРИАЛЫ
     * @param string $alias
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionMaterial(string $alias = '')
    {
        $model = Material::findByAlias($alias);
        return $this->render('material', [
            'model' => $model,
            'city' => $this->city,
        ]);
    }

    /**
     * ЗАКОН О БАНКРОТСТВЕ
     * @param string $alias
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionLaw(string $alias = '')
    {
        return $this->render('law');
    }

    /**
     * РЕЙТИНГ КОМПАНИЙ
     * @return string
     */
    public function actionCompanyList()
    {
        return $this->render('company-list', [
            'dataProvider' => Company::search(Yii::$app->request->get(), 10),
            'city' => $this->city,
        ]);
    }

    /**
     * ПРОФИЛЬ КОМПАНИЙ
     * @param string $alias
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionCompany(int $cpage = 1,string $alias = '')
    {
        return $this->render('company', [
            'model' => Company::findByAlias($alias),
            'cpage' => $cpage,
            'city' => $this->city,
        ]);
    }

    /**
     * РЕЙТИНГ АРБИТРАЖНЫХ УПРАВЛЯЮЩИХ
     * @return string|array
     * @throws NotFoundHttpException
     */
    public function actionArbitrationList()
    {
        return $this->render('arbitration-list', [
            'dataProvider' => Arbitration::search(Yii::$app->request->get(), $this->city->region_code),
            'city' => $this->city,
        ]);
    }

    /**
     * ПРОФИЛЬ УПРАВЛЯЮЩЕГО
     * @param string $id
     * @param string $page
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionArbitration(string $id = '', string $page = '1')
    {
        return $this->render('arbitration', [
            'arbitration' => Arbitration::findById($id),
            'page' => $page,
            'city' => $this->city,
        ]);
    }

    /**
     * /callback.json
     * ОБРАТНЫЙ ЗВОНОК
     * @throws NotFoundHttpException
     */
    public function actionCallback()
    {
        $req = $this->ajaxRequest();
        $model = new FormCallback();
        if ($model->load($req->post()) and $model->send()) {
            return ['success' => 1];
        }
        return ActiveForm::validate($model);
    }

    /**
     * /fssp-search.json
     * ПОИСК ДОЛГОВ ФССП
     * @throws NotFoundHttpException
     */
    public function actionFsspSearch()
    {
        $req = $this->ajaxRequest();
        $searchType = ArrayHelper::getValue($req->post(), 'Fssp.searchType', false);
        if (!$searchType) throw new NotFoundHttpException();
        $model = new Fssp();
        if ($searchType === 'A') $model->scenario = Fssp::SCENARIO_A;
        if ($searchType === 'B') $model->scenario = Fssp::SCENARIO_B;
        if ($searchType === 'C') $model->scenario = Fssp::SCENARIO_C;
        if ($model->load($req->post()) and $model->createTask()) {
            return ['success' => 1];
        }
        return ActiveForm::validate($model);
    }

    /**
     * /contact.json
     * ОБРАТНАЯ СВЯЗЬ (КОНТАКТ)
     * @throws NotFoundHttpException
     */
    public function actionContact()
    {
        $req = $this->ajaxRequest();
        $model = new FormContact();
        if ($model->load($req->post()) and $model->send()) {
            return ['success' => 1, $model->userFile];
        }
        return ActiveForm::validate($model);
    }

    /**
     * /consult.json
     * ЗАДАТЬ ВОПРОС ЮРИСТУ
     * @throws NotFoundHttpException
     */
    public function actionConsult()
    {
        $req = $this->ajaxRequest();
        $model = new FormConsult();
        if ($model->load($req->post()) and $model->send()) {
            return ['success' => 1];
        }
        return ActiveForm::validate($model);
    }

    /**
     * /send-test.json
     * ПРОЙТИ ТЕСТ
     * @throws NotFoundHttpException
     */
    public function actionSendTest()
    {
        $req = $this->ajaxRequest();
        $model = new FormTest();
        if ($model->load($req->post()) and $model->send()) {
            return ['success' => 1];
        }
        return ActiveForm::validate($model);
    }

    /**
     * /send-faq.json
     * FAQ ЗАДАТЬ ВОПРОС
     * @throws NotFoundHttpException
     */
    public function actionSendFaq()
    {
        $req = $this->ajaxRequest();
        $model = new Faq();
        $model->scenario = Faq::SCENARIO_ADD;
        if ($model->load($req->post()) and $model->addFaq()) {
            return ['success' => 1];
        }
        return ActiveForm::validate($model);
    }

    /**
     * /logout
     * ВЫЙТИ
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * /login.json
     * АВТОРИЗАЦИЯ ПОЛЬЗОВАТЕЛЯ
     * @throws NotFoundHttpException
     */
    public function actionLogin()
    {
        $req = $this->ajaxRequest();
        $model = new FormLogin();
        if ($model->load($req->post()) and $model->login()) {
            return ['success' => 1];
        }
        return ActiveForm::validate($model);
    }

    /**
     * /register.json
     * РЕГИСТРАЦИЯ НОВОГО ПОЛЬЗОВАТЕЛЯ
     * @throws NotFoundHttpException
     */
    public function actionRegister()
    {
        $req = $this->ajaxRequest();
        $model = new FormRegister();
        if ($model->load($req->post()) and $model->create()) {
            return [ 'success' => 1 ];
        }
        return ActiveForm::validate($model);
    }

    /**
     * АКЦИВАЦИЯ НОВОГО ПОЛЬЗОВАТЕЛЯ
     * @param string $token
     * @throws NotFoundHttpException
     */
    public function actionActivate(string $token)
    {
        if (User::confirmEmail($token)) {
            Yii::$app->session->setFlash('is-activated', true);
            return $this->goHome();
        }
        throw new NotFoundHttpException();
    }

    /**
     * @return City
     * @throws NotFoundHttpException
     */
    protected function getCity()
    {
        if ($this->_city === null) {
            $this->_city = City::findOne(['alias' => Url::subdomain()]);
            if ($this->_city === null) throw new NotFoundHttpException();
        }
        return $this->_city;
    }

    /**
     * @return Request
     * @throws NotFoundHttpException
     */
    private function ajaxRequest()
    {
        $req = Yii::$app->request;
        if (YII_ENV_PROD and !$req->isAjax) throw new NotFoundHttpException();
        Yii::$app->response->format = Response::FORMAT_JSON;
        return $req;
    }

}
