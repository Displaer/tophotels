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


    public function actionSend(){

        if(Yii::$app->request->isAjax) {
            $model = new Request();
            $model->created = date("Y-m-d H:i:s");
            $model->status = 1;

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

    public function actionIndex(){
        $this->layout = 'top';
        $model = new Request();
        $model->created = date("Y-m-d H:i:s");
        $model->status = 1;

        return $this->render('index',['model'=>$model]);
    }


    /**
     * @param Request $model
     * @return bool
     */
    public function sendEmail($model){




        $tmp = file_get_contents(Yii::getAlias("@app") . "/components/template/mail.html");
        $tmp = str_replace('#id#',$model->id, $tmp);
        $tmp = str_replace('#name#',$model->name, $tmp);
        $tmp = str_replace('#phone#',$model->phone, $tmp);


        $mail = new PHPMailer();

        // todo: if has troubles use 3
        $mail->SMTPDebug = 0;                               // Enable verbose debug output

        // todo: start output buffer

        ob_start();
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'asadova.mtt@gmail.com';                 // SMTP username
        $mail->Password = 'swAsadovaMtt$$99';                           // SMTP password
        //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        //$mail->SMTPAutoTLS = false;                            // Enable TLS encryption, `ssl` also accepted
        //$mail->Port = 587;                                    // TCP port to connect to


        $mail->setFrom('asadova.mtt@gmail.com');
        $mail->addAddress("test.th.welcome@gmail.com");     // Add a recipient
        $mail->addBCC('prodilshod@gmail.com');

        $mail->Subject = 'Добавлена новая заявка';

        $mail->msgHTML($tmp);
        $mail->AltBody = sprintf('Поступила заявка № %s', $model->id);
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);
        $sent = false;
        if (!$mail->send()) {
            echo $mail->ErrorInfo . PHP_EOL;
        } else {
            $sent = true;
        }

        $allLog = ob_get_contents();

        if($sent){
            return true;
        } else {
            print $allLog;
        }



        return false;

        // не рабочий пример
        /*return Yii::$app->mailer->compose()
                ->setFrom('noreply@tophotels.ru')
                ->setTo(["prodilshod@gmail.com","test.th.welcome@gmail.com"])
                ->setSubject('Добавлена новая заявка')
                ->setTextBody(sprintf('Поступила заявка № %s', $model->id))
                ->setHtmlBody(sprintf('<p>Поступила заявка № %s</p>', $model->id))
                ->send();*/

    }

} 