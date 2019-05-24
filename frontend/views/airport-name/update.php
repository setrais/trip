<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AirportName */

$this->title = 'Update Airport Name: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Airport Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="airport-name-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
