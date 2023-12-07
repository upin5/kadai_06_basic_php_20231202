<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$manga = $_POST['Manga'];
$cala = $_POST['Cala'];


$dataString = "$name,$email,$manga,$cala";

$file = 'data.txt';
file_put_contents($file,$dataString . PHP_EOL,FILE_APPEND);


if($file){
    echo 'データが保存されました';
}else{
    echo 'データの保存ができませんでした';
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url('frieren3.jpg'); background-size:cover; background-repeat: no-repeat;">
    <h1 style="color:red; text-align:center">アンケートにお答えいただきありがとうございます。</h1>
    <p style="color:red; font-size:24px; font-weight:bold; text-align:center">結果を見るボタンを押して結果をご覧ください。</p>
    <form action="read2.php" method="post">
    <div id="bbb" style="display:flex; align-items:center">
        <input type="submit" id="kekka" class="Kekka" value="結果を見る">
    </div>
    </form>
</body>
</html>