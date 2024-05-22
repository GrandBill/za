<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\OrderEmployee $model */

$this->title = 'Update Order Employee: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Order Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-employee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
