# 好きな漫画・キャラクターアンケート

## 紹介
アンケートに答えて、登録するとキャラクター画像とともに結果表示

## 工夫
基本的な構造は授業の内容と同じだが、アンケート結果に応じて画像を表示するようにした。dbはtxt上にJSONで格納。cssはインラインで、jsも組み込んだ。

## 苦労
cssは別ファイルからのリンクで設計したかったが、リンクがうまくできず、やむを得ずインラインで設定。予定していない行でundefinedのエラーが出続け、空白が原因であることはわかったものの、そもそもデータを出力する意図のない行でのエラーでさらに混乱。最終的にread2.phpファイル上でtrimで空白行を読み取らない処理をしたらエラーが消えた。これにほぼ1日費やした。