<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tanya */

$this->title = 'Create Tanya';
$this->params['breadcrumbs'][] = ['label' => 'Tanyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
