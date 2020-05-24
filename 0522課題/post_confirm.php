<?php

function h($value){
    return htmlspecialchars($value, ENT_QUOTES);//危ないURLを無効化する関数
}

$flg = 0;
$name =$_POST["name"];
$mail =$_POST["mail"];

$m =("$name,$mail");

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $m."\r\n");
fclose($file); // ファイルを閉じる



// if($name ==""){
//     $name = "未入力です";
//     $flg =1;
// }
// if($mail ==""){
//     $mail = "未入力です";
//     $flg =1;
// }

?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?php echo ($name);?><br>
EMAIL：<?php echo ($mail);?>

<?php
 if($flg == 0){
    ?>
<br><button> 登録 </button>
<?php 
 }
 ?>
<!-- <ul>
<li><a href="index.php">index.php</a></li>
</ul> -->
</body>
</html>