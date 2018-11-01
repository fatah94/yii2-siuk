<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SukuBangsa */

$this->title = 'Update Suku Bangsa: ' . $model->deskripsi_suku;
$this->params['breadcrumbs'][] = ['label' => 'Data Suku Bangsa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deskripsi_suku, 'url' => ['view', 'id' => $model->id_suku]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suku-bangsa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
