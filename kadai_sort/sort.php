<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 配列
        $nums = [15, 4, 18, 23, 10];

        function sort_2way($array, $order){  // sort_2way関数
        if ($order === true) { // もしorderがtrueなら
          echo '昇順にソートします。<br>' ;// 昇順にソートします。を表示。
          sort($array); // 引数：array(配列)
        }
        elseif($order === false) { // trueではなく、falseだった場合
          echo '降順にソートします。<br>';
          rsort($array); // 引数：array(配列)
        }

        // 配列や連想配列に対して繰り返し処理を行いたい場合のやつ
        foreach ($array as $num) { // 要素を取り出す配列名 as 取り出した要素を代入する変数名
          echo $num .'<br>';
        }
        }
        sort_2way($nums, true);
        sort_2way($nums, false);

        