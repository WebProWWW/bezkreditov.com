<?php

use app\models\PageBlock;

/* @var $this yii\web\View */
/* @var $page app\models\Page */
/* @var $model PageBlock */

$model = $page->model;

?>

<?php foreach ($model->blocks as $block): ?>
    <?= $this->render('block/' . $block->view) ?>
<?php endforeach; ?>