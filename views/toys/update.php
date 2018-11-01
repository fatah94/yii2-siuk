<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Toys */

$this->title = 'Update Toys: ' . $model->toy;
$this->params['breadcrumbs'][] = ['label' => 'Data Toys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->toy, 'url' => ['view', 'id' => $model->toy_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toys-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
