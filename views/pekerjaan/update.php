<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pekerjaan */

$this->title = 'Update Pekerjaan: ' . $model->id_pekerjaan;
$this->params['breadcrumbs'][] = ['label' => 'Pekerjaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pekerjaan, 'url' => ['view', 'id' => $model->id_pekerjaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pekerjaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
