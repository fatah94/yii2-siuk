<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Umat */

$this->title = 'Create Umat';
$this->params['breadcrumbs'][] = ['label' => 'Data Umat', 'url' => ['index']];
if(isset($_GET['id'])){
	$this->params['breadcrumbs'][] = ['label' => 'Keluarga '.$datakk['nama'], 'url' => ['viewkk?id='.$datakk['id']]];
	// $this->params['breadcrumbs'][] = ['label' => 'Keluarga Umat', 'url' => ['index']];
}
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="umat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
