<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題4</title>
    </head>

    <body>
        <div>
            <?php
            try {
                $db = new PDO(
                    'mysql:dbname=mydb;host=localhost;',
                    'root',
                    'root'
                );
                $stmt = $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            } catch(PDOException $e) {
                echo 'DB connection error:'.$e->getMessage();
                exit(); 
            }
            

            session_start();
            try {
                
                echo '';
            } catch(PDOException $e) {
                echo 'エラー: '.$e->getMessage();
            }
            ?>
        </div>
    </body>
</html>
