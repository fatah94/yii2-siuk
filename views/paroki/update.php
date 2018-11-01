<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Paroki */

$this->title = 'Update Paroki: ' . $model->nama_paroki;
$this->params['breadcrumbs'][] = ['label' => 'Data Paroki', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_paroki, 'url' => ['view', 'id' => $model->id_paroki]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paroki-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
