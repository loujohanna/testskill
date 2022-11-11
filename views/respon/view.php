<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use app\models\Weather;

/** @var yii\web\View $this */
/** @var app\models\Respon $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Respons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="respon-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'lat',
            'lon',
            'timezone',
            'pressure',
            'humidity',
            'wind_speed',
        ],
    ]) ?>

</div>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'main',
            'description',
        ],
    ]); ?>