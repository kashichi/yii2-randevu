<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kashichi\Randevu\models\Hasta */

$this->title = 'Create Hasta';
$this->params['breadcrumbs'][] = ['label' => 'Hastas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
