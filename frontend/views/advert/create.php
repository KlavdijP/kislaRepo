<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Advert */

$this->title = Yii::t('app', 'Create Advert');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Adverts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advert-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
