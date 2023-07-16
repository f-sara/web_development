<DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>課題１</title>
        </head>

        <body>
            <?php
            for ($i = 2; $i <=100;) {
                 if ($i % 2 == 0)
                     echo $i. "<br>" ;
                 $i = $i + 1;
                }
            ?>
        </body>
     </html>