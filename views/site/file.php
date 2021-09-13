<?php

/* @var $this yii\web\View */
/* @var $page app\models\Page */
/* @var $model app\models\PageFile */

$model = $page->model;

?>
<?= $this->render($model->file, ['page' => $page]) ?>
