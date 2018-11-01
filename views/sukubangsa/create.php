<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SukuBangsa */

$this->title = 'Create Suku Bangsa';
$this->params['breadcrumbs'][] = ['label' => 'Suku Bangsas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suku-bangsa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
