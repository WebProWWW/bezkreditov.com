<?php

/* @var $this yii\web\View */
/* @var $formLogin app\models\FormLoginAdmin */

$this->registerCssFile('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');

use yii\widgets\ActiveForm;

?>
<div class="wrapper">
    <div class="container my-auto">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <?php $form = ActiveForm::begin() ?>
                            <?= $form->field($formLogin, 'email')->input('text') ?>
                            <?= $form->field($formLogin, 'password')->passwordInput() ?>
                            <?= $form->field($formLogin, 'remember')->checkbox() ?>
                            <button type="submit" class="btn btn-primary">Вход</button>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
html, body {
    height: 100%;
}
.wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100%;
    overflow-y: auto;
}
.help-block {
    font-size: 13px;
    color: red;
}
</style>
