<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題15</title>
    </head>

    <body>
        <div>
            <?php
            ini_set('display_errors', "On");
            try{
                $db = new PDO('mysql:dbname;host=localhost;oirt=8889;charset=utf8','root');
                $stmt = $db->prepare('UPDATE items SET name  = :name WHERE id = :id');
                if ($stmt->execute(array(':name' => '編集したデータ', ':id' => 1000))){
                    echo '情報を更新しました。';
                }else {
                    print_r($stmt->errorInfo());
                    echo '情報を更新に失敗しました。';
                }
            } catch(PDOException $e){
                echo 'DB接続エラー:' . $e->getMessage();
            }
            ?>
        </div>
    </body>
</html>
