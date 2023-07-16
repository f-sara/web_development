<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題16</title>
    </head>

    <body>
        <div>
            <?php
            foreach (range(1, 100) as $x){
                if ($x % 3 == 0 && $x % 5 == 0){
                    print(strval($x) ." FizzBuzz" ."<br>");
                }elseif ($x % 3 == 0) {
                    print(strval($x) ." Fizz" ."<br>");
                }elseif ($x % 5 == 0){
                    print(strval($x) ." Buzz" ."<br>");
                }else{
                    print(strval($x) ."<br>");
                }
            }
            ?>
        </div>
    </body>
</html>
