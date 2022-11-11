<?php

use app\models\Respon;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Respons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="respon-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Respon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'lat',
            'lon',
            'timezone',
            'pressure',
            'humidity',
            'wind_speed',
            [
                'class' => ActionColumn::className(),
                'template'=>'{view}'
            ],
        ],
    ]); ?>


</div>
