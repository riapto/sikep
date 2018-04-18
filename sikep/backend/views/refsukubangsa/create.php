<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refsukubangsa */

$this->title = 'Create Referensi Suku Bangsa';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Suku Bangsa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-sukubangsa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
