<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ekonomi */

$this->title = 'Update Ekonomi: ' . $model->kriteria_ekonomi;
$this->params['breadcrumbs'][] = ['label' => 'Data Ekonomi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kriteria_ekonomi, 'url' => ['view', 'id' => $model->id_ekonomi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ekonomi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
