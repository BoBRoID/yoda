<?php
namespace backend\models;


use common\models\Photo;
use yii\base\Model;

class PhotoForm extends Model
{

    public $id;
    public $path;
    public $date;
    public $text;
    public $tags;
    public $order;

    public $file;

    public function rules()
    {
        return [
            [['id', 'date', 'order'], 'integer'],
            [['path', 'text', 'tags'], 'string'],
            [['file'], 'safe'],
            [['path'], 'required']
        ];
    }

    /**
     * @param array $data
     * @param null $formName
     * @return bool
     */
    public function load($data, $formName = null)
    {
        if($uploadedImage = $this->uploadImage()){
            $this->path = $uploadedImage;
        }

        return parent::load($data, $formName);
    }

    /**
     * @param Photo $photo
     */
    public function loadPhoto($photo)
    {
        $this->setAttributes([
            'id'    =>  $photo->id,
            'path'  =>  $photo->path,
            'date'  =>  $photo->date,
            'text'  =>  $photo->text,
            'tags'  =>  $photo->tags,
            'order' =>  $photo->order
        ]);
    }

    /**
     * @return bool
     */
    public function save()
    {
        if(!$this->validate()){
            return false;
        }
        
        $photo = Photo::findOne($this->id);

        if(!$photo){
            $photo = new Photo();
        }

        $photo->setAttributes([
            'path'  =>  $this->path,
            'date'  =>  $this->date,
            'text'  =>  $this->text,
            'tags'  =>  $this->tags,
            'order' =>  $this->order,
        ]);

        return $photo->save(false);
    }

    private function uploadImage()
    {

    }
}