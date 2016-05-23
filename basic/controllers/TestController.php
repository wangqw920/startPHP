<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;

class TestController extends Controller {

    // ...其它代码...

    //获取输入message，输出试图say
    public function actionSay($message = 'Hello') {
        return $this->render('say', ['message' => $message]);
    }

}
