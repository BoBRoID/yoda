<?php
namespace backend\models;


use common\helpers\UploadHelper;
use common\models\Photo;
use yii\base\Exception;
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
            [['id', 'order'], 'integer'],
            [['path', 'text', 'tags'], 'string'],
            ['date', 'date', 'format' => 'Y-m-d'],
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
            'date'  =>  date('Y-m-d', $photo->date),
            'text'  =>  $photo->text,
            'tags'  =>  $photo->tags,
            'order' =>  $photo->order
        ], false);
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
            'date'  =>  strtotime($this->date),
            'text'  =>  $this->text,
            'tags'  =>  $this->tags,
            'order' =>  $this->order,
        ]);

        $saved = $photo->save(false);

        if($saved){
            $this->id = $photo->id;
        }

        return $saved;
    }

    public function getFullPath(){
        $fullPath = $this->path;

        if(!preg_match('/^http(s|):\/\//', $fullPath)){
            $fullPath = \Yii::$app->params['frontend'].$fullPath;
        }

        return $fullPath;
    }

    private function uploadImage()
    {
        $file = false;

        if(array_key_exists('PhotoForm', $_FILES) && empty($_FILES['PhotoForm']['error']['file'])){
            try{
                $file = UploadHelper::__upload($_FILES['PhotoForm']);
            }catch(Exception $e){

            }
        }

        return $file;
    }
}