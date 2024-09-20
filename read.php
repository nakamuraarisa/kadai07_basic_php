<?php
// ファイルを変数に格納
$filename = 'data.csv';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');

// テーブルを開始
echo "<table border='1' style='border-collapse: collapse; width: 50%; text-align: left;'>";

// ヘッダー行のスタイリングを追加
echo "<thead><tr><th>名前</th><th>日付</th><th>時間</th><th>熱</th><th>喉痛</th><th>嘔吐</th><th>下痢</th><th>頭痛</th><th>薬　</th><th>食事</th><th>備考</th></tr></thead>";
echo "<tbody>";
 
// // whileで行末までループ処理
// while (!feof($fp)) {
 
//     // fgetsでファイルを読み込み、変数に格納
//     $txt = fgets($fp);
 
//     // ファイルを読み込んだ変数を出力
//     echo $txt.'<br>';
// } 

// whileで行末までループ処理
while (($row = fgetcsv($fp)) !== FALSE) {
    // 行を表示
    echo "<tr>";
    foreach ($row as $cell) {
        // セルを表示
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>";
}

// テーブルの終わり
echo "</tbody></table>";

// fcloseでファイルを閉じる
fclose($fp);
?>