<?php
namespace backend\controllers;


use backend\models\PhotoForm;
use common\models\Photo;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class PhotosController extends Controller
{

    public function actionIndex(){
        return $this->render('index', [
            'photosProvider'    =>  new ActiveDataProvider([
                'query' =>  Photo::find()
            ])
        ]);
    }

    public function actionAdd(){
        $model = new PhotoForm();

        if(\Yii::$app->request->post('PhotoForm') && $model->load(\Yii::$app->request->post())){
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'Фотография успешно добавлена!');
                return $this->redirect(Url::to(['photos/edit/'.$model->id]));
            }else{
                \Yii::$app->session->setFlash('error', 'Произошла ошибка при добавлении фотографии!');
            }
        }

        return $this->render('add', [
            'model' =>  $model
        ]);
    }

    public function actionEdit($id){
        if(!$photo = Photo::findOne($id)){
            throw new NotFoundHttpException("Фотография с идентификатором {$id} не найдена!");
        }

        $model = new PhotoForm();
        $model->loadPhoto($photo);

        if(\Yii::$app->request->post('PhotoForm') && $model->load(\Yii::$app->request->post())){
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'Фотография успешно отредактирована!');
            }else{
                \Yii::$app->session->setFlash('error', 'Произошла ошибка при редактировании фотографии!');
            }
        }

        return $this->render('edit', [
            'model' =>  $model
        ]);
    }

}