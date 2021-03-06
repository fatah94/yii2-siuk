<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Keuskupan */

$this->title = 'Update Keuskupan: ' . $model->nama_keuskupan;
$this->params['breadcrumbs'][] = ['label' => 'Data Keuskupan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_keuskupan, 'url' => ['view', 'id' => $model->id_keuskupan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keuskupan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
