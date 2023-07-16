<DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>課題１</title>
        </head>

        <body>
            <div>
                <?php
                $h = ["apple"=>"りんご", "lemon"=>"レモン", "grape"=>"ぶどう", "tomato"=>"トマト"];
                foreach ($h as $a => $valie){
                    echo "英語：". $valie. "<br>";
                    echo "日本語：". $a. "<br>";
                }
                ?>
            </div>
        </body>
     </html>