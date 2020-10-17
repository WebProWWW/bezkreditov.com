<?php

namespace app\controllers;

use app\models\City;
use app\helpers\Url;
use app\models\Fssp;
use app\models\News;

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
     * @param string $view
     * @return string
     */
    public function actionIndex($view='index')
    {
        return $this->render($view, [
            'city' => $this->_city,
        ]);
    }

    /**
     * НОВОСТИ
     *
     * @param string $alias
     * @return string
     * @throws yii\web\NotFoundHttpException
     */
    public function actionNewsItem($alias = '')
    {
        $model = News::findByAlias($alias);
        return $this->render('news-item', [
            'model' => $model,
            'city' => $this->_city,
        ]);
    }

    /**
     * @return array
     * @throws NotFoundHttpException
     */
    public function actionFsspSearch()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
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
}
