<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Paroki */

$this->title = 'Create Paroki';
$this->params['breadcrumbs'][] = ['label' => 'Data Paroki', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paroki-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
