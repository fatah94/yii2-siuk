<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lingkungan */

$this->title = 'Data Umat di Lingkungan ' . $nama_lingkungan;
$this->params['breadcrumbs'][] = ['label' => 'Lingkungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lingkungan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('@app/views/umat/detailViewKk.php', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
    ]) ?>

</div>
