<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Request */
/* @var $form yii\widgets\ActiveForm */
/* @var array $statusOptions */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput([]) ?>

    <?= $form->field($model, 'phone')->textInput([]) ?>

    <?= $form->field($model, 'mail')->textInput([]) ?>

    <?= $form->field($model, 'desc')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'direction')->textarea(['rows' => 4]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
