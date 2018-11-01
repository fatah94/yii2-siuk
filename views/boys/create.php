<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Boys */

$this->title = 'Create Boys';
$this->params['breadcrumbs'][] = ['label' => 'Data Boys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="boys-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
