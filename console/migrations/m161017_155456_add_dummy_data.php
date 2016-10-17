<?php

use yii\db\Migration;

class m161017_155456_add_dummy_data extends Migration
{
    public function up()
    {
        $sections = [
            [
                'position'  =>  \common\models\Section::POSITION_INDEX,
                'title' =>  'Section Heading',
                'lead'  =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'text'  =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.'
            ],[
                'position'  =>  \common\models\Section::POSITION_INDEX,
                'title' =>  'Section Heading',
                'lead'  =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'text'  =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.'
            ],
        ];

        $images = [];

        for($i = 0; $i < 50; $i++){
            $images[] = [
                'path'  =>  'http://placehold.it/750x450',
            ];
        }

        foreach($sections as $section){
            $model = new \common\models\Section($section);
            $model->save(false);
        }

        foreach($images as $image){
            $model = new \common\models\Photo($image);
            $model->save(false);
        }
    }

    public function down()
    {
        return true;
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
