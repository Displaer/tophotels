<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 13.03.2016
 * Time: 12:49
 */

namespace app\controllers;

use app\models\Request;
use PHPMailer\PHPMailer\PHPMailer;
use yii\web\Controller;
use \Yii;

class TopController extends Controller{


    /**
     * Метод для отправки письма, работает по AJAX-у
     * @return string
     */
    public function actionSend(){

        if(Yii::$app->request->isAjax) {
            $model = new Request();
            $model->created = date("Y-m-d H:i:s");
            // Индикация успешной процедуры сохранения данных
            $saved = ($model->load(Yii::$app->request->post()) && $model->save());

            // Индикация успешной отправки почты
            $mailed = $this->sendEmail($model);
            if($saved && $mailed)
                return json_encode(['status'=>'success']);
            else
                return json_encode(['status'=>'error', 'message'=>'Internal Server Error']);
            Yii::$app->end();
        }
    }

    /**
     * Точка входа, отображения основноего интерфейса.
     * @return string
     */
    public function actionIndex(){
        $this->layout = 'top';
        $model = new Request();
        return $this->render('index',['model'=>$model]);
    }

    /**
     * Метод для отправки почты.
     *
     * @param Request $model
     * @return bool
     */
    private function sendEmail($model){

        // не рабочий пример
        return Yii::$app->mailer->compose('top/mail',['model'=>$model])
                ->setFrom('asadova.mtt@gmail.com')
                ->setTo(["prodilshod@gmail.com","test.th.welcome@gmail.com"])
                ->setSubject('Добавлена новая заявка')
                ->send();

    }

}