<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AdvertSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Adverts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advert-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Advert'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'naslov',
            [            // !!!--!!! custom column
                'attribute' => 'Image',             // utakne mickeno slikco (50px) za naslov
                'format' => 'raw',
                'value' => function ($model) {
                      if ($model->image_web_filename!=''){    // !!!-!!! glupog li trika pri url spodaj !
                          return '<img src="'.Yii::$app->homeUrl. '/../uploads/status/'.$model->image_web_filename.'" width="50px" height="auto">';
                      }
                      else 
                          return 'no image';
                },
              ],
            'povzetek',
            'avtor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
