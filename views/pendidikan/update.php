<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pendidikan */

$this->title = 'Update Pendidikan: ' . $model->deskripsi_pendidikan;
$this->params['breadcrumbs'][] = ['label' => 'Data Pendidikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deskripsi_pendidikan, 'url' => ['view', 'id' => $model->id_pendidikan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendidikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
