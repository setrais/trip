<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AirportName */

$this->title = 'Create Airport Name';
$this->params['breadcrumbs'][] = ['label' => 'Airport Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="airport-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
