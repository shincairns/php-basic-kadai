<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
                // ソート用の関数を作成
                function sort_2way($array, $order) {
                    // orderがTRUEの場合は昇順、FALSEの場合は降順にソート
                    if ($order) {
                        sort($array);  // 昇順ソート
                    } else {
                        rsort($array); // 降順ソート
                    }
        
                    // ソート結果を1行ずつ表示
                    foreach ($array as $num) {
                        echo $num . "<br>";
                    }
                }
        
                // ソートする配列を宣言
                $nums = [15, 4, 18, 23, 10];
        
                // 昇順ソート
                echo "昇順にソートします。:<br>";
                sort_2way($nums, TRUE);
        
                echo "<br>";
        
                // 降順ソート
                echo "降順にソートします。:<br>";
                sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>