<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 元の配列
        $nums = [15, 4, 18, 23, 10];

        // sort_2way関数
        function sort_2way(&$array, $order) {
            if ($order === 'asc') {
                sort($array, SORT_NUMERIC);
            } elseif ($order === 'desc') {
                rsort($array, SORT_NUMERIC);
            }
        }

        // 昇順用にコピー
        $asc_nums = $nums;
        sort_2way($asc_nums, 'asc');

        echo '昇順にソートします。<br>';
        echo implode('<br>', $asc_nums);

        echo '<br><br>';

        // 降順用にコピー
        $desc_nums = $nums;
        sort_2way($desc_nums, 'desc');

        echo '降順にソートします。<br>';
        echo implode('<br>', $desc_nums);
        ?>
    </p>
</body>

</html>
