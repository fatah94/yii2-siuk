<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StatusGerejawi */

$this->title = 'Create Status Gerejawi';
$this->params['breadcrumbs'][] = ['label' => 'Status Gerejawis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-gerejawi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
