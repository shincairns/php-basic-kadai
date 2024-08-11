<!DOCTYPE html>
<html lang = "ja">
  <head>
    <title>PHP基礎編</title>
    <meta charset = "UTF-8">
</head>

<body>
<p>
         <?php
         $vegitable_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
          foreach ($vegitable_data as $index => $value) {
            echo "{$index}：{$value}<br>";
        }
  ?>
  </p>
</body>
<html>