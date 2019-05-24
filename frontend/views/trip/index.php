<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TripSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trip-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trip', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            array( 'attribute' => 'id',
                   'visible'=>true,
                   'label' => 'Ид.командировки',
            ),
            /*array( 'attribute' => 'corporate_id',
                'visible'=>true,
                'label' => 'Ид.корпорации',
            ),
            array( 'attribute' => 'user_id',
                'visible'=>false,
                'label' => 'Ид.пользователя',
            ),
            array( 'attribute' => 'created_at',
                'visible'=>false,
                'label' => 'Дата создания',
            ),
            array( 'attribute' => 'number',
                'visible'=>false,
                'label' => 'Номер',
            ),*/
            // 'updated_at',
            // 'coordination_at',
            // 'saved_at',
            // 'tag_le_id',
            // 'trip_purpose_id',
            // 'trip_purpose_parent_id',
            // 'trip_purpose_desc:ntext',
            // 'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
