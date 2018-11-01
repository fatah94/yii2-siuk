<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StatusPerkawinan */

$this->title = 'Create Status Perkawinan';
$this->params['breadcrumbs'][] = ['label' => 'Data Status Perkawinan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-perkawinan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
