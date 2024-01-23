<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\UserRecord;
use yii\jui\DatePicker

/** @var yii\web\View $this */
/** @var app\models\UserBonus $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-bonus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $users = UserRecord::find()->all();
    ?>

<?=
        $form->field($model, 'user_id')->widget(Select2::classname(), [
            'bsVersion' => 5,
            'data' => ArrayHelper::map($users,'id','name'),
            'options' => ['placeholder' => 'Select a user ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'points')->textInput() ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= 
        DatePicker::widget([
            'model' => $model,
            'attribute' => 'date_create',
            'language' => 'ru',
            'dateFormat' => 'yyyy-MM-dd',
        ]);
    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
