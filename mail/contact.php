<?php

/* @var $title string */
/* @var $this yii\web\View */
/* @var $model app\models\FormContact */

$this->title = $title;

?>
<p><strong><?= $title ?></strong></p>
<p><strong>Имя:</strong> <?= $model->name ?></p>
<p><strong>Email:</strong> <?= $model->email ?></p>
<p><strong>Тема:</strong> <?= $model->subject ?></p>
<?= $model->message ?>
