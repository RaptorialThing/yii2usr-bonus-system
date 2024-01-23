<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserBonus $model */

$this->title = 'Create User Bonus';
$this->params['breadcrumbs'][] = ['label' => 'User Bonuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-bonus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
