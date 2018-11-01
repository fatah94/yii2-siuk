<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JabatanSosial */

$this->title = 'Create Jabatan Sosial';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Sosials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-sosial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
