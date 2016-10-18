<?php
namespace backend\controllers;


use backend\models\SectionForm;
use common\models\Section;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class SectionsController extends Controller
{

    public function actionIndex(){
        return $this->render('index');
    }

    public function actionAdd(){
        $model = new SectionForm();

        if(\Yii::$app->request->post('SectionForm') && $model->load(\Yii::$app->request->post())){
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'Секция успешно добавлена!');
            }else{
                \Yii::$app->session->setFlash('error', 'Произошла ошибка при добавлении секции!');
            }
        }

        return $this->render('add', [
            'model' =>  $model
        ]);
    }

    public function actionEdit($id){
        if(!$section = Section::findOne($id)){
            throw new NotFoundHttpException("Секция с идентификатором {$id} не найдена!");
        }

        $model = new SectionForm();
        $model->loadSection($section);

        if(\Yii::$app->request->post('SectionForm') && $model->load(\Yii::$app->request->post())){
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'Секция успешно отредактирована!');
            }else{
                \Yii::$app->session->setFlash('error', 'Произошла ошибка при редактировании секции!');
            }
        }

        return $this->render('edit', [
            'model' =>  $model
        ]);
    }

}