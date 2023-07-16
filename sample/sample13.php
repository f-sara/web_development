<DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>課題13</title>
        </head>

        <body>
            <div>
                <?php
                try{
                    $db = new PDO('mysql:dbname=mydb;host=localhost;','root','root');
                }catch(PODException $e){
                    echo 'DB connection error:'.$e->getMessage();
                }
                $records = $db->query('SELECT* FROM items');
                foreach($records as $record){
                    echo "ID:" . $record['id'] . "<br>";
                    echo "Name:" . $record['name'] . "<br>";
                }
                ?>
            </div>
        </body>
     </html>