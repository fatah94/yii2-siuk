<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Agama */

$this->title = 'Update Agama: ' . $model->nama_agama;
$this->params['breadcrumbs'][] = ['label' => 'Data Agama', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_agama, 'url' => ['view', 'id' => $model->id_agama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
