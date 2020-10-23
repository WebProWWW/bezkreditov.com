<?php

/* @var $this yii\web\View */
/* @var $model app\models\FormEmail */

$this->title = 'pdf «Предварительно решение»';

?>
<p><strong>Отправлен pdf «Предварительно решение»</strong></p>
<p>Email: <?= $model->email ?></p>
<?= $model->comment ?>