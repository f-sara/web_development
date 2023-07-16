<DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>応用１</title>
        </head>

        <body>
            <div>
                <?php
                $start = "2023/05/08";
                $end = "2024/05/08";
                $w = ["(Mon)", "(Tue)", "(Wed)", "(Thu)", "(Fry)", "(Sat)", "(Sun)"];
                $h = 0;
                for ($i = $start; $i <= $end; $i = date("Y/m/d", strtotime($i. "+1day"))){
                    $day = date("m/d", strtotime($i. "+1day"));
                    echo $day. $w[$h]. "<br>";
                    $h = $h + 1;
                    if ($h == 7){
                        $h = 0;
                    }
                }
                ?>
            </div>
        </body>
     </html>