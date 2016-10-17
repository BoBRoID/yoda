<?php

use yii\db\Migration;

/**
 * Handles the creation for table `photos`.
 */
class m161017_144649_create_photos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('photos', [
            'id'        =>  $this->primaryKey(),
            'path'      =>  $this->text(),
            'date'      =>  $this->integer()->unsigned()->notNull(),
            'text'      =>  $this->text(),
            'tags'      =>  $this->text(),
            'order'     =>  $this->integer(4)->unsigned()->notNull()->defaultValue(0)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('photos');
    }
}
