<?php

namespace app\controllers;

use app\helpers\Url;
use app\models\Arbitration;
use app\models\City;
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
use app\models\UnicomFormUniversal;
use app\models\User;
use app\models\Unicom;

use Yii;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Cookie;
use yii\web\NotFoundHttpException;
use yii\web\Request;
use yii\web\Response;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use linslin\yii2\curl\Curl;

/**
 * Class SiteController
 * @package app\controllers
 *
 * @property City $city
 */
class SiteController extends Controller
{
    private $_city;

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
     * КОРНЕВЫЕ СТРАНИЦЫ
     */
    public function actionIndex(string $view = 'index')
    {
        $city = City::findOne(['alias' => 'index']);
        return $this->render($view, [
            'city' => $this->city,
        ]);
    }

    /**
     * ОФФЕРЫ
     */
    public function actionOffers($loanAlias = '', $alias = '', $page = 1)
    {
        //https://unicom24.ru/api/v1/offers/?page_size=99999&with_inactive=true&with_info_offer=true&region_id=180185&loan_type=mortgage&without_popular_block=true&ordering=-min_loan_period_reduce&loan_sum=3000000&loan_period=5
        $model = new Unicom([
            'loanAlias' => $loanAlias,
            'alias' => $alias,
            'pageNum' => $page,
        ]);
        return $this->render('offers', ['model' => $model]);
    }

    /**
     * ОТЗЫВ ОФФЕРА JSON
     */
    public function actionOfferReview($mfiId)
    {
        $curl = new Curl();
        $curl->setGetParams(['page' => 1, 'page_size' => 1]);
        $data = $curl->get('https://unicom24.ru/api/v1/reviews/mfi/'.$mfiId.'/');
        return $this->asJson(Json::decode($data));
    }

    /**
     * ОФФЕР
     */
    public function actionOffer($id)
    {
        $curl = new Curl();
        $data = $curl->get('https://unicom24.ru/api/universal/v1/doc/offer/' . $id . '/');
        $offer = ArrayHelper::getValue(Json::decode($data), 'offer');
//        ArrayHelper::remove($data, 'offer_description');
//        ArrayHelper::remove($data, 'about_company');
//        ArrayHelper::remove($data, 'api_required_fields');
//        ArrayHelper::remove($data, 'allowed_traffic');
//        ArrayHelper::remove($data, 'conditions');
//        ArrayHelper::remove($data, 'forbidden_traffic');
//        ArrayHelper::remove($data, 'all_regions');
//        ArrayHelper::remove($data, 'regions');
//        ArrayHelper::remove($data, 'regions_sorted');
//        ArrayHelper::remove($data, 'phptemplate');
        return $this->asJson([
            'offer' => $offer,
            'inputs' => (new UnicomFormUniversal())->inputs,
        ]);
    }

    /**
     * ОТПРАВКА ОФФЕРА JSON
     */
    public function actionOfferSend()
    {
        $req = $this->ajaxRequest();
        $model = new UnicomFormUniversal();
        $model->load($req->post());
        if ($model->load($req->post()) && $model->send()) {
            return [
                'success' => 1,
                'model' => $model,
                'response' => $model->response,
            ];
        }
        return ActiveForm::validate($model);
    }

    /**
     * НОВОСТИ
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
     */
    public function actionLaw(string $alias = '')
    {
        return $this->render('law');
    }

    /**
     * РЕЙТИНГ КОМПАНИЙ
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
     * ОБРАТНЫЙ ЗВОНОК /callback.json
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
     */
    protected function getCity()
    {
        if ($this->_city === null) {
            $this->_city = City::findOne(['alias' => Url::subdomain()]);
            if ($this->_city === null) {
                throw new NotFoundHttpException();
            }
        }
        return $this->_city;
    }

    /**
     * @return Request
     */
    private function ajaxRequest()
    {
        $req = Yii::$app->request;
        if (YII_ENV_PROD and !$req->isAjax) throw new NotFoundHttpException();
        Yii::$app->response->format = Response::FORMAT_JSON;
        return $req;
    }

}
