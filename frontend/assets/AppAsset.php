<?php

namespace frontend\assets;
	
use yii\web\AssetBundle;
use Yii;     // nastavimo @themes alias da ni potrebno spreminjati baseUrl ob vsaki spremembi teme
	
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);
	
/** * Main frontend application asset bundle. : v tem specificirate, kaj nalagate: css, js, ... 
*/
class AppAsset extends AssetBundle {

  public $basePath = '@webroot';    
  public $baseUrl = '@themes';        // lokacija izbrane teme
  
  public $css = [
    'css/site.css',	// vse kar uporabimo je site.css
  ];
  
  public $js = [    ];    
  
  public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
  ];
}
