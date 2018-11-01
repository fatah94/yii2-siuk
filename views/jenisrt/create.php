<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JenisRt */

$this->title = 'Create Jenis RT';
$this->params['breadcrumbs'][] = ['label' => 'Data Jenis RT', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-rt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
