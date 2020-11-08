<?php

namespace app\controllers;

use app\models\City;
use app\helpers\Url;
use app\models\FormConsult;
use app\models\FormContact;
use app\models\FormTest;
use app\models\Fssp;
use app\models\Material;
use app\models\News;
use app\models\Company;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Cookie;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;

class SiteController extends Controller
{
    private $_city;

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        $this->_city = City::findOne(['alias' => Url::subdomain()]);
        if ($this->_city === null) {
            $this->_city = City::findOne(['alias' => 'index']);
        }
        Yii::$app->view->params['city'] = $this->_city;
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
            'city' => $this->_city,
        ]);
    }

    /**
     * КОРНЕВЫЕ СТРАНИЦЫ (views/site)
     * @param string $view
     */
    public function actionIndex(string $view = 'index')
    {
        return $this->render($view, [
            'city' => $this->_city,
        ]);
    }

    /**
     * НОВОСТИ
     * @param string $alias
     * @param int $id
     */
    public function actionNewsItem(string $alias = '', int $id = null)
    {
        $model = News::findByAlias($alias, $id);
        return $this->render('news-item', [
            'model' => $model,
            'city' => $this->_city,
        ]);
    }

    /**
     * ПОЛЕЗНЫЕ МАТЕРИАЛЫ
     * @param string $alias
     */
    public function actionMaterial(string $alias = '')
    {
        $model = Material::findByAlias($alias);
        return $this->render('material', [
            'model' => $model,
            'city' => $this->_city,
        ]);
    }

    /**
     * ЗАКОН О БАНКРОТСТВЕ
     * @param string $alias
     */
    public function actionLaw(string $alias = '')
    {
        return $this->render('law');
    }

    /**
     * РЕЙТИНГ КОМПАНИЙ
     * @param string $alias
     */
    public function actionCompany(string $alias = '')
    {
        return $this->render('company', [
            'model' => Company::findByAlias($alias),
            'city' => $this->_city,
        ]);
    }

    /**
     * ПОИСК ДОЛГОВ ФССП
     */
    public function actionFsspSearch()
    {
        $this->jsonFormat();
        $req = Yii::$app->request;
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
        $this->jsonFormat();
        $model = new FormContact();
        if ($model->load(Yii::$app->request->post()) and $model->send()) {
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
        $this->jsonFormat();
        $model = new FormConsult();
        if ($model->load(Yii::$app->request->post()) and $model->send()) {
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
        $this->jsonFormat();
        $model = new FormTest();
        if ($model->load(Yii::$app->request->post()) and $model->send()) {
            return ['success' => 1];
        }
        return ActiveForm::validate($model);
    }

    /**
     * SET JSON FORMAT
     */
    private function jsonFormat()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
    }

}
