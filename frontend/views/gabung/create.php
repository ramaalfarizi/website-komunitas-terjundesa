<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Gabung */

$this->title = 'Form Gabung';
$this->params['breadcrumbs'][] = ['label' => 'Gabungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gabung-create">
    <div class="container mt-5">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>