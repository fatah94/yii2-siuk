<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisRt */

$this->title = 'Update Jenis RT: ' . $model->kriteria_rt;
$this->params['breadcrumbs'][] = ['label' => 'Data Jenis RT', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kriteria_rt, 'url' => ['view', 'id' => $model->id_jenis_rt]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-rt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
