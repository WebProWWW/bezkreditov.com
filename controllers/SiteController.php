<?php

namespace app\controllers;

use app\models\City;
use app\helpers\Url;

use Yii;
use yii\web\Controller;
use yii\web\Cookie;

class SiteController extends Controller
{
    /**
     * @param string $view
     * @return string
     */
    public function actionIndex($view='index')
    {
        $city = City::findOne(['alias' => Url::subdomain()]);
        if ($city === null) $city = City::findOne(['alias' => 'index']);
        Yii::$app->view->params['city'] = $city;
        $hasCookieIsCity = Yii::$app->request->cookies->has('is-city');
        if (!$hasCookieIsCity) {
            Yii::$app->response->cookies->add(new Cookie([
                'name' => 'is-city',
                'value' => 1,
                'domain' => Url::rootDomain(),
                'expire' => time() + 3600 * 24 * 300,

            ]));
            Yii::$app->session->setFlash('is-city', true);
        }
        return $this->render($view, [
            'city' => $city,
        ]);
    }
}