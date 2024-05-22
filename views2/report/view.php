<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Report $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Отчёты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="report-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'order_id',
                'value' => function ($model) {
                    return $model->order->number;
                },
            ],
            'days',
            'detail',
            'price',
            'reason',
            [
                'attribute' => 'help_id',
                'value' => function ($model) {
                    return $model->help->name;
                },
            ],
            [
                'attribute' => 'quality_id',
                'value' => function ($model) {
                    return $model->quality->name;
                },
            ],
        ],
    ]) ?>

</div>
