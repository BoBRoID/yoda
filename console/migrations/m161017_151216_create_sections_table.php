<?php

use yii\db\Migration;

/**
 * Handles the creation for table `sections`.
 */
class m161017_151216_create_sections_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('sections', [
            'id'        =>  $this->primaryKey(),
            'position'  =>  $this->integer(4)->unsigned()->notNull()->defaultValue(0),
            'title'     =>  $this->string(),
            'lead'      =>  $this->string(),
            'text'      =>  $this->string(),
            'order'     =>  $this->integer(4)->unsigned()->notNull()->defaultValue(0)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sections');
    }
}
