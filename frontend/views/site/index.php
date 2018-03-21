<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'ระบบรายงาน';
?>
<?php
$route1= Yii::$app->urlManager->createUrl('test/test1');
$route2= Yii::$app->urlManager->createUrl(['test/test2','name'=>'kitsada','lname'=>'tidwilas']);
?>
<a href="<?=$route1?>">ไปที่ test1</a><br>
<a href="<?=$route2?>">ไปที่ test2</a>
<br>
<?=
Html::a('ไปที่ test3',['test/test1','a'=>'1']);
?>

<?=
yii\helpers\Url::to('test/test1','aaa')
?>
<form action="" method="get">
    ชื่อ<input

</form>