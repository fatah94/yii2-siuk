<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Keterlibatan */

$this->title = 'Create Keterlibatan';
$this->params['breadcrumbs'][] = ['label' => 'Keterlibatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keterlibatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
