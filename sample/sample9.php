<DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>課題１</title>
        </head>

        <body>

        <?php
            echo "名前:". $_POST["name"];
        ?>



        <form method = "post" action = "sample9.php">
            <input type = "text" name = "name">
            <button type = "submit">送信</button>
        </form>


        </body>
     </html>