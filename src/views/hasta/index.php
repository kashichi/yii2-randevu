<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kashichi\Randevu\models\HastaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hastas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hasta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',
            'randevu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
