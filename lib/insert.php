<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

require_once('init.php');
$name=h($_POST['name']);
$comment=h($_POST['comment']);

//header('Content-Type=application/json');

//テーブルにインサート
$stmt=$condb->prepare("INSERT INTO post(name,comment) values(?,?)");
$stmt->execute(array($name,$comment));
if($condb){
  echo 'insert成功';
}else{
  echo 'insert失敗';
}

$stmt=null;


}else{
  echo '不正なアクセスです';
}