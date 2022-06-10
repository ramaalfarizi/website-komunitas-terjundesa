<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tanya */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jawab')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>