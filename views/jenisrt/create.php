<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JenisRt */

$this->title = 'Create Jenis Rt';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Rts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-rt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
