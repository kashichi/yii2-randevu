<?php
use kashichi\Randevu\models\Randevu;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kashichi\Randevu\models\Hasta */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="hasta-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $randevu=Randevu::find()->all();
$listData=ArrayHelper::map($randevu,'randevu','randevu'); ?>
    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'randevu')->dropDownList($listData,
        ['prompt'=>'Select...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
