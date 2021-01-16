<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kashichi\Randevu\models\Hasta */

$this->title = 'Update Hasta: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hastas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
