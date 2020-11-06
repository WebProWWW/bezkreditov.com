<?php

/* @var $this yii\web\View */
/* @var $title string */
/* @var $model app\models\FormTest */

$this->title = $title;

?>
<p><strong>Клиенту отправлен PDF «Предварительное решение»</strong></p>
<p>Email: <?= $model->email ?></p>
<?= $model->comment ?>