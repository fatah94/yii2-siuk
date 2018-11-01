<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WaktuBaptis */

$this->title = 'Update Waktu Baptis: ' . $model->id_wkt_baptis;
$this->params['breadcrumbs'][] = ['label' => 'Waktu Baptis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_wkt_baptis, 'url' => ['view', 'id' => $model->id_wkt_baptis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="waktu-baptis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
