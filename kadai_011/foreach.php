<?php
// 連想配列作成
$arraylists = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];
// 確認用：print_r($array);

foreach ($arraylists as $key => $value) {
echo "{$key}:{$value}<br>";
}

?>