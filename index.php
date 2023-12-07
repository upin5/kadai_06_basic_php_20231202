<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:dimgrey">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<header>
    <!-- スライド挿入 -->
    <div id="img-container">
        <img src="frieren2.jpg" class="slide">
        <img src="spyfamily2.jpg" class="slide">
        <img src="jujutu2.jpg" class="slide">
        <img src="goburin.jpg" class="slide">
        <img src="botti3.jpg" class="slide">
    </div>
<style>
    #img-container{
        display: flex;
    }

    #img-container img{
        width: 300px;
        height: auto;
        margin: 0 auto;

    }


</style>
<!-- <script>
    let slideIndex = 0;
    showSlides();

    function showSlides(){
        let i;
        let slides = document.getElementsByClassName("slide");
        for (i = 0; i < slides.length; i++){
            slides[i].style.display = "none";

        }
        slideIndex++;
        if(slideIndex > slides.length){
            slideIndex = 1;

        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000);
    }
</script> -->



</header>
<h1 style="color:white; text-align:center">■好きな漫画アンケート■</h1>

<div id="com_1">
   <p style="color:white; font-size:24px; text-align:center" > アンケートに答えて送信しよう！</p>
</div>

<form action="write2.php" method="post">
    <div id="nm" style="text-align: center; display: flex; align-items: center;">
    <span style="color:white; font-size: 24px;">名前:</span>
    <input type="text" id="name" name="name" style="width:200px; padding:5px">
    </div>


<form action="write2.php" method="post">
    <div id="em" style="text-align: center; display: flex; align-items: center;">
    <span style="color:white; font-size: 24px">Email:</span>
    <input type="email" id="email" name="email" style="width: 200px; padding: 5px;">
    </div>




<form action="write2.php" method="post">
<label for="manga"><p style="color:white; font-weight:bold">＜好きな漫画を選んでください＞</p></label>   
<select id="manga" name="Manga" style="width:200px; padding:10px;">
    <option value="brank">漫画</option>
    <option value="葬送のフリーレン">葬送のフリーレン</option>
    <option value="スパイファミリー">スパイファミリー</option>
    <option value="呪術廻戦">呪術廻戦</option>
    <option value="リコリスリコイル">リコリスリコイル</option>
    <option value="ゴブリンスレイヤー">ゴブリンスレイヤー</option>
    <option value="ぼっち・ざ・ろっく">ぼっち・ざ・ろっく</option>
</select>


<form action="write2.php" method="post">
<label for="cala"><p style="color:white; font-weight:bold">＜好きなキャラクターを選んでください＞</p></label> 
<select id="cala" name="Cala" style="width:200px; padding:10px;">
    <option value="brank">キャラクター</option>
    <option value="フリーレン">フリーレン（葬送のフリーレン）</option>
    <option value="シュタルク">シュタルク（葬送のフリーレン）</option>
    <option value="フェルン">フェルン（葬送のフリーレン）</option>
    <option value="アーニャ">アーニャ（スパイファミリー）</option>
    <option value="ロイド">ロイド（スパイファミリー）</option>
    <option value="ヨル">ヨル（スパイファミリー）</option>
    <option value="五条悟">五条悟（呪術廻戦）</option>
    <option value="虎杖悠仁">虎杖悠仁（呪術廻戦）</option>
    <option value="伏黒恵">伏黒恵（呪術廻戦）</option>
    <option value="釘崎野薔薇">釘崎野薔薇（呪術廻戦）</option>
    <option value="乙骨憂太">乙骨憂太（呪術廻戦）</option>
    <option value="錦木千束">錦木千束（リコリスリコイル）</option>
    <option value="井ノ上たきな">井ノ上たきな（リコリスリコイル）</option>
    <option value="クルミ">クルミ（リコリスリコイル）</option>
    <option value="ゴブリンスレイヤー">ゴブリンスレイヤー（ゴブリンスレイヤー）</option>
    <option value="女神官">女神官（ゴブリンスレイヤー）</option>
    <option value="妖精弓手">妖精弓手（ゴブリンスレイヤー）</option>
    <option value="後藤ひとり">後藤ひとり（ぼっち・ざ・ろっく）</option>
    <option value="喜多郁代">喜多郁代（ぼっち・ざ・ろっく）</option>
    <option value="伊地知虹夏">伊地知虹夏（ぼっち・ざ・ろっく）</option>
    <option value="山田リョウ">山田リョウ（ぼっち・ざ・ろっく）</option>
</select>

<div id="aaa" style="margin-top:10px;">
<input type="submit" id="sousin" class="Sousin" value="送信">
</div>
</form>





</body>
</html>