<DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>応用２</title>
        </head>

        <body>
            <table>
                <?php
                for ($i = 1; $i <= 10; $i++){
                    if ($i % 2){
                        print('<tr style="background-color: #ccc">');
                    }else{
                        print('<tr>');
                    }
                    print('<td>'. $i. '行目</td>');
                    print('</tr>');
                }
                ?>
            </table>
        </body>
     </html>