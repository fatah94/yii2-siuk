<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HubunganKk */

$this->title = 'Create Hubungan Kk';
$this->params['breadcrumbs'][] = ['label' => 'Data Hubungan Kepala Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hubungan-kk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
