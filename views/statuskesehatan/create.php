<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StatusKesehatan */

$this->title = 'Create Status Kesehatan';
$this->params['breadcrumbs'][] = ['label' => 'Status Kesehatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-kesehatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
