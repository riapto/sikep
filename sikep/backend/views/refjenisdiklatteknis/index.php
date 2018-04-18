<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefjenisdiklatteknisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Jenis Diklat Teknis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenisdiklatteknis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('CreateReferensi Jenis Diklat Teknis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdJenisDiklat',
            'IdDiklatKelompok',
            'IdDiklatSektor',
            'NamaJenisDiklatTeknis',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
