<?php

/* @var $this yii\web\View */
/* @var $page app\models\Page */

use yii\helpers\ArrayHelper;

$this->title = $page->title;
ArrayHelper::setValue($this->params, 'description', $page->description);
ArrayHelper::setValue($this->params, 'keywords', $page->keywords);
ArrayHelper::setValue($this->params, 'breadcrumbs', $page->breadcrumbs);

$this->render($page->model->view, ['model' => $model]);