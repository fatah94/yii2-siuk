<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WaktuBaptis */

$this->title = 'Create Waktu Baptis';
$this->params['breadcrumbs'][] = ['label' => 'Data Waktu Bapti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="waktu-baptis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
