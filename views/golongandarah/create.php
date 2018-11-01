<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GolonganDarah */

$this->title = 'Create Golongan Darah';
$this->params['breadcrumbs'][] = ['label' => 'Golongan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golongan-darah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
