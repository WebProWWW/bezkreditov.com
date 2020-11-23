<?php

/* @var $this yii\web\View */
/* @var $view string */
/* @var $formLogin app\models\FormLoginAdmin */

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
    <title>CMS</title>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render($view, ['formLogin' => $formLogin]) ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>