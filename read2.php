
<?php 
    $characterImages = array(
        'フリーレン' => 'chara1_full2.png',
        'シュタルク' => 'chara3_full2.png',
        'フェルン' => 'chara2_full2.png',
        'アーニャ' => 'anya.png',
        'ロイド' => 'roid.png',
        'ヨル' => 'yol.png',
        '五条悟' => 'gozyo.jpg',
        '虎杖悠仁' => 'itadori.jpg',
        '伏黒恵' => 'husiguro.jpg',
        '釘崎野薔薇' => 'kugisaki.jpg',
        '乙骨憂太' => 'okkotu.png',
        '錦木千束' => 'chisato.jpg',
        '井ノ上たきな' => 'takina.jpg',
        'クルミ' => 'kurumi.jpg',
        'ゴブリンスレイヤー' => 'pre01_b01.png',
        '女神官' => 'sinkan.png',
        '妖精弓手' => 'yumi.png',
        '後藤ひとり' => 'gotouhitori.jpg',
        '喜多郁代' => 'kitaikuyo.jpg',
        '伊地知虹夏' => 'nizika2.jpg',
        '山田リョウ' => 'yamada.jpg',

    );

    $data = file_get_contents('data.txt');
    $dataArray = explode(PHP_EOL,$data);

    foreach($dataArray as $line){
        if(empty(trim($line))){
        continue;
        }


        $fields = explode(',', $line);

        echo'<div class="text">名前:' . $fields[0] . '</div>';
        echo'<div class="text">Email:' . $fields[1] . '</div>';
        echo'<div class="text">好きな漫画:' . $fields[2] . '</div>';
        echo'<div class="text">好きなキャラ:' . $fields[3] . '</div>';

        if($fields[3] === 'フリーレン'){
            echo '<img src="chara1_full2.png" alt="フリーレンの画像" style="width: 20%; height: auto;">';
        }elseif($fields[3] === 'シュタルク'){
            echo '<img src="chara3_full2.png" alt="シュタルクの画像" style="width: 20%; height: auto;">';
        }elseif($fields[3] === 'フェルン'){
            echo '<img src="chara2_full2.png" alt="フェルンの画像" style="width: 20%"; height: auto;>';
        }elseif($fields[3] === 'アーニャ'){
            echo '<img src="anya.png" alt="アーニャの画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === 'ロイド'){
            echo '<img src="roid.png" alt="ロイドの画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === 'ヨル'){
            echo '<img src="yol.png" alt="ヨルの画像" style="width:30%; height: auto;">';
        }elseif($fields[3] === '五条悟'){
            echo '<img src="gozyo.jpg" alt="五条の画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '虎杖悠仁'){
            echo '<img src="itadori.jpg" alt="虎杖の画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '伏黒恵'){
            echo '<img src="husiguro.jpg" alt="伏黒の画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '釘崎野薔薇'){
            echo '<img src="kugisaki.jpg" alt="釘崎の画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '乙骨憂太'){
            echo '<img src="okkotu.png" alt="乙骨の画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '錦木千束'){
            echo '<img src="chisato.jpg" alt="錦木の画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '井ノ上たきな'){
            echo '<img src="takina.jpg" alt="たきなの画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === 'クルミ'){
            echo '<img src="kurumi.jpg" alt="くるみの画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === 'ゴブリンスレイヤー'){
            echo '<img src="pre01_b01.png" alt="ゴブリンスレイヤーの画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '女神官'){
            echo '<img src="sinkan.png" alt="女神官の画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '妖精弓手'){
            echo '<img src="yumi.png" alt="妖精弓手の画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '後藤ひとり'){
            echo '<img src="gotouhitori.jpg" alt="後藤ひとりの画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '喜多郁代'){
            echo '<img src="kitaikuyo.jpg" alt="きたいくよの画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '伊地知虹夏'){
            echo '<img src="nizika2.jpg" alt="にじかの画像" style="width:20%; height: auto;">';
        }elseif($fields[3] === '山田リョウ'){
            echo '<img src="yamada.jpg" alt="リョウの画像" style="width:20%; height: auto;">';
        }

        echo'<hr>';
    };

    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action="read.php" method="post">
    <input type="submit" name="read_data" value="データ表示">
</form> -->



</body>
</html>

