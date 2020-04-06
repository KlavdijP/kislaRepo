<?php

use yii\db\Migration;

/**
 * m200327_004206_extend_advert_table_add_image
 */
 
class m200327_004206_extend_advert_table_add_image extends Migration{

   /**
   * {@inheritdoc}
   */
   public function safeUp()    {
	$this->addColumn('{{%advert}}', 'image_src_filename', $this->string(200)->notNull()->after('avtor'));
	$this->addColumn('{{%advert}}', 'image_web_filename', $this->string(200)->notNull()->after('image_src_filename'));
   }
 
   /**
   * {@inheritdoc}
   */
   public function safeDown()    {
	$this->dropColumn('{{%advert}}','image_src_filename');
	$this->dropColumn('{{%advert}}','image_web_filename');
	return false;
   }
 }