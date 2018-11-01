<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Toys */

$this->title = 'Create Toys';
$this->params['breadcrumbs'][] = ['label' => 'Data Toys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toys-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
