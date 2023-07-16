<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題14</title>
    </head>

    <body>
        <div>
            <?php
            try {
                $db = new PDO('mysql:dbname=mydb;host=localhost;', 'root', 'root');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            } catch(PDOException $e) {
                echo 'DB connection error:'.$e->getMessage();
                exit(); 
            }
            
            $id = 1000;
            $name = '練習用データ';
            
            try {
                $sql = 'INSERT INTO items (id, name) VALUES (:id, :name)';
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->execute();
                echo 'データが正常に挿入されました';
            } catch(PDOException $e) {
                echo 'データの挿入エラー: '.$e->getMessage();
            }
            ?>
        </div>
    </body>
</html>
