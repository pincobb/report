<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        echo 'ทดสอบ 1';
        $a = 3;
        $b = 5;
        $sum = $a + $b;
        $data2 = ['a' => 5555];
        $para = ['a' => $a];
        return $this->render('test1', $data2, ['sum' => $sum]);
    }

    public function actionTest2($name = null,$lname= null) {
        
       $info="Your name is $name $lname";
       return $this->render('test2',['info'=>$info]);
       
        
    }

}
