<?php
define('SERVERNAME',getenv('IP'));
define('USERNAME',getenv('C9_USER'));
define('PASSWORD','');
define('DBNAME','chat');
define('PORT',3306);
define('DBH','mysql:host='.SERVERNAME.';port='.PORT.';dbname='.DBNAME.';charset=utf8');

try{
  //db接続
  $condb=new PDO(DBH,USERNAME,PASSWORD); 

}catch(PDOException $e){
  echo $e->getMessage();
  
}

