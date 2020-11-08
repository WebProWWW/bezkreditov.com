<?php

/* @var $title string */
/* @var $this yii\web\View */
/* @var $model app\models\FormConsult */

$this->title = $title;

?>
<p><strong><?= $title ?></strong></p>
<p><strong>Телефон:</strong> <?= $model->phone ?></p>
<p><strong>Имя:</strong> <?= $model->name ?></p>
<?= $model->message ?>
