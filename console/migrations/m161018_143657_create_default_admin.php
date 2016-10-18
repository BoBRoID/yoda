<?php

use yii\db\Migration;

class m161018_143657_create_default_admin extends Migration
{
    public function up()
    {
        $user = new \common\models\User([
            'username'  =>  'admin',
            'status'    =>  \common\models\User::STATUS_ACTIVE
        ]);

        $user->setPassword('defaultPassword');

        $user->save(false);

    }

    public function down()
    {
        echo "m161018_143657_create_default_admin cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
