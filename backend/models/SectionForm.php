<?php
namespace backend\models;


use common\models\Section;
use yii\base\Model;

class SectionForm extends Model
{

    public $id;
    public $title;
    public $lead;
    public $text;
    public $position;

    public function rules()
    {
        return [
            [['id', 'position'], 'integer'],
            [['title', 'lead', 'text'], 'string'],
            [['text'], 'required']
        ];
    }

    public function getPossiblePositions(){
        return (new Section())->getPossiblePositions();
    }

    /**
     * @param Section $section
     */
    public function loadSection($section){
        $this->setAttributes([
            'id'    =>  $section->id,
            'title' =>  $section->title,
            'lead'  =>  $section->lead,
            'text'  =>  $section->text,
            'position'=>$section->position
        ]);
    }

    /**
     * @return bool
     */
    public function save()
    {
        $model = Section::findOne($this->id);

        if(!$model){
            $model = new Section();
        }

        $model->setAttributes([
            'title'     =>  $this->title,
            'lead'      =>  $this->lead,
            'text'      =>  $this->text,
            'position'  =>  $this->position
        ]);

        $saved = $model->save(false);

        if($saved){
            $this->id = $model->id;
        }

        return $saved;
    }

}