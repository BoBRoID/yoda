<?php

use yii\db\Migration;

/**
 * Handles the creation for table `menu`.
 */
class m161017_151341_create_menu_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('menu', [
            'id'        =>  $this->primaryKey(),
            'link'      =>  $this->text(),
            'position'  =>  $this->integer(4)->unsigned()->notNull()->defaultValue(0),
            'order'     =>  $this->integer(4)->unsigned()->notNull()->defaultValue(0)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('menu');
    }
}
