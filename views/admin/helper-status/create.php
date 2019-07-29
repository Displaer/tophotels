<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HelperStatus */

$this->title = Yii::t('app', 'Create Helper Status');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Helper Statuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="helper-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
