<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\sidenav\SideNav;
use yii\helpers\Url;

AppAsset::register($this);

if (Yii::$app->session->hasFlash('alert')) {
    $this->registerJS('$("#alertModal").modal("show")');
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Yii::$app->name ?> | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
    <?php if (Yii::$app->session->hasFlash('alert')) { ?>
        <!-- Modal -->
        <div class="modal fade top" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row text-center">
                            <?= Yii::$app->session->getFlash("alert"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
    <?php } ?>
    <div class="container">
    <div class="row">
    <div class="col-md-2">
    <?php
        $sidenav = SideNav::widget([
            'type' => SideNav::TYPE_DEFAULT,
            'heading' => 'Menu',
            'items' => [
                [
                    'url' => ['/keuskupan/index'],
                    'label' => 'Keuskupan',
                ],
                [
                    'url' => ['/lingkungan/index'],
                    'label' => 'Lingkungan',
                ],
                [
                    'url' => ['/paroki/index'],
                    'label' => 'Paroki',
                ],
                [
                    'url' => ['/umat/index'],
                    'label' => 'Umat',
                ],
                [
                    'label' => 'Others',
                    'items' => [
                        [
                            'url' => ['/agama/index'],
                            'label' => 'Agama',
                        ],
                        [
                            'url' => ['/bidangstudi/index'],
                            'label' => 'Bidang Studi',
                        ],
                        [
                            'url' => ['/ekonomi/index'],
                            'label' => 'Ekonomi',
                        ],
                        [
                            'url' => ['/golongandarah/index'],
                            'label' => 'Golongan Darah',
                        ],
                        [
                            'url' => ['/hubungankk/index'],
                            'label' => 'Hubungan KK',
                        ],        
                        [
                            'url' => ['/jabatansosial/index'],
                            'label' => 'Jabatan Sosial',
                        ],
                        [
                            'url' => ['/jenisrt/index'],
                            'label' => 'Jenis RT',
                        ],
                        [
                            'url' => ['/keterlibatan/index'],
                            'label' => 'Keterlibatan',
                        ],
                        [
                            'url' => ['/statusgerejawi/index'],
                            'label' => 'Status Gerejawi',
                        ],
                        [
                            'url' => ['/statuskesehatan/index'],
                            'label' => 'Status Kesehatan',
                        ],
                        [
                            'url' => ['/statusperkawinan/index'],
                            'label' => 'Status Perkawinan',
                        ],
                        [
                            'url' => ['/pekerjaan/index'],
                            'label' => 'Pekerjaan',
                        ],
                        [
                            'url' => ['/pendidikan/index'],
                            'label' => 'Pendidikan',
                        ],
                        [
                            'url' => ['/sukubangsa/index'],
                            'label' => 'Suku',
                        ],
                        [
                            'url' => ['/waktubaptis/index'],
                            'label' => 'Waktu Baptis',
                        ],
                        [
                            'url' => ['/wilayah/index'],
                            'label' => 'Wilayah',
                        ],  
                    ],
                ],

            ],
        ]);
        $identity = Yii::$app->user->identity;
        $role = !empty($identity) ? $identity->role : '';

        if(!empty($identity->role)){
            echo $sidenav;
        }

        ?>
    </div>
    <div class="col-md-10">
    <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Yii::$app->name.' '.date('Y') ?></p>

        <p class="pull-right"><?php // echo Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
