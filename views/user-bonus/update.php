<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserBonus $model */

$this->title = 'Update User Bonus: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Bonuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-bonus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
