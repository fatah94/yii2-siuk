<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisRt */

$this->title = 'Update Jenis Rt: ' . $model->id_jenis_rt;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Rts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis_rt, 'url' => ['view', 'id' => $model->id_jenis_rt]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-rt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
