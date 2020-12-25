<?php

/* @var $title string */
/* @var $this yii\web\View */
/* @var $model app\models\Faq */

$this->title = $title;

?>
<p><strong><?= $title ?></strong></p>
<p><strong>Имя:</strong> <?= $model->name ?></p>
<p><strong>Email:</strong> <?= $model->email ?></p>
<p><strong>Телефон:</strong> <?= $model->phone ?></p>
<p><?= $model->text ?></p>
