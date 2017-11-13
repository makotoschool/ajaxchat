<?php
if($_SERVER[REQUEST_METHOD]=='POST'){
require_once('init.php');
$stmt=$condb->query('SELECT name,comment FROM post');
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt=null;
 
header('Content-Type:application/json');
echo json_encode($result);
exit;
}else{
 echo '不正アクセスです';   
    
}
