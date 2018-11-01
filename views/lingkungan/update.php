<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lingkungan */

$this->title = 'Update Lingkungan: ' . $model->id_lingkungan;
$this->params['breadcrumbs'][] = ['label' => 'Lingkungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lingkungan, 'url' => ['view', 'id' => $model->id_lingkungan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lingkungan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
