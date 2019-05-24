<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TripServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trip Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trip-service-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trip Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'trip_id',
            'service_id',
            'status',
            'type_booking',
            // 'variants',
            // 'price',
            // 'currency',
            // 'confirmation_number',
            // 'deadline',
            // 'date_start',
            // 'date_end',
            // 'start_city_id',
            // 'start_point_id',
            // 'end_point_id',
            // 'end_city_id',
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
