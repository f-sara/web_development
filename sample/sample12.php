<DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>課題１２</title>
        </head>

        <body>
            <div>
                <?php
                session_start();
                print($_SESSION['test']);
                ?>
            </div>
        </body>
     </html>