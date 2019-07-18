<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 13.03.2016
 * Time: 12:49
 */

namespace app\controllers;

use app\models\Request;
use yii\web\Controller;

class TopController extends Controller{

    public function actionIndex(){

        $this->layout = 'top';

        $model = new Request();

        // Индикация успешной процедуры сохранения данных
        $saved = ($model->load(\Yii::$app->request->post()) && $model->save());

        return $this->render('index', [
            'model' => $model,
            'saved' => $saved
        ]);
    }

} 