$(function(){
//入力されたがどうか判定値を入れておく箱  
  var check1=false;
  var check2=false;
//名前文字入力きっかけの世界
$('#name').on('change focus blur keypress',function(){
  var valcheck=$(this).val();//入力された文字を箱に入れる
  if(valcheck!=''){//もし文字箱が空じゃなければ
    $('#name_msg').hide();//メッセージ隠す
    check1=true;
  }else{
    $('#name_msg').show();//メッセージ出現
    check1=false;
  }
  check();//下に作ってる関数を走らせる
});
  
  //comment文字入力きっかけの世界
$('#comment').on('change focus keypress',function(){
  var valcheck=$(this).val();//入力された文字を箱に入れる
  if(valcheck!=''){//もし文字箱が空じゃなければ
    $('#comment_msg').hide();//メッセージ隠す
    check2=true;
  }else{
    $('#comment_msg').show();//メッセージ出現
    check2=false;
  }
  check();//下に作ってる関数を走らせる
});
  
//2箇所とも入力されていたら送信ボタンを有効にする関数作ってみる
function check(){
  if(check1 && check2){//check1 check2ともにtrueのだったら
     $('#submit').attr('disabled',false);   
     }
  if(!check1 || !check2){//check1 check2どちらか一つでもfalseだったら
     $('#submit').attr('disabled',true); 
     }
  
}  
    

  
  
  
  
});