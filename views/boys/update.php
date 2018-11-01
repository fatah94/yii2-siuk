<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Boys */

$this->title = 'Update Boys: ' . $model->boy_id;
$this->params['breadcrumbs'][] = ['label' => 'Boys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->boy_id, 'url' => ['view', 'id' => $model->boy_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="boys-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
