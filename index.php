<?php
require_once('./lib/init.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>chat</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="./css/style.css" type="text/css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
  <div id="bordwrap" class="comment_container">
    <dl id="talkbord">
     
    </dl>
    
    
  </div>
  <div class="form_container">
      <form>
    <div class="form-group">
      <label>お名前</label>
      <input type="text" id="name" name="name" class="form-control">
      <p id="name_msg" class="text-danger">入力必須項目です</p>
    </div>
    <div class="form-group">
      <label>コメント</label>
      <textarea id="comment" name="comment" class="form-control"></textarea>
      <p id="comment_msg" class="text-danger">入力必須項目です</p>
    </div> 
    <input id="submit" type="submit" value="投稿" class="btn btn-primary" disabled>
    
    
  </form>
  </div>  
</body>
</html>