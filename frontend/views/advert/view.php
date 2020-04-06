<?php

  use yii\helpers\Html;
  use yii\widgets\DetailView;

  /* @var $this yii\web\View */
  /* @var $model frontend\models\Advert */

  $this->title = $model->id;
  $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Adverts'), 'url' => ['index']];
  $this->params['breadcrumbs'][] = $this->title;
  \yii\web\YiiAsset::register($this);
  ?>

  <div class="advert-view">
  <h1><?= Html::encode($this->title) ?></h1>
    <p>
	<?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
	<?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
		'class' => 'btn btn-danger',
		'data' => [
			'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
			'method' => 'post',
		],
	]) ?>
  </p>

  <?= DetailView::widget([
	'model' => $model,
	'attributes' => [
		'id',
		'naslov',
		'povzetek',
		'avtor',
		'image_web_filename',        // !!!--!!! dodana
		'image_src_filename',
        ],
  ]) ?>

  <?php                    // če pa slikca je, jo pokaži spodaj
	if ($model->image_web_filename!='') {
		echo '<br /><p><img src="'.Yii::$app->homeUrl. '/../uploads/status/'.$model->image_web_filename.'"></p>';
	}
  ?>    
	
</div>