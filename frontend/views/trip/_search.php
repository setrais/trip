<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TripSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trip-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // echo $form->field($model, 'id') ?>

    <?= $form->field($model, 'corporate_id') ?>
    <?= $form->field($model, 'service') ?>
    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'coordination_at') ?>

    <?php // echo $form->field($model, 'saved_at') ?>

    <?php // echo $form->field($model, 'tag_le_id') ?>

    <?php // echo $form->field($model, 'trip_purpose_id') ?>

    <?php // echo $form->field($model, 'trip_purpose_parent_id') ?>

    <?php // echo $form->field($model, 'trip_purpose_desc') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
