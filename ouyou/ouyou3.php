<DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>応用３</title>
        </head>

        <body>
            <div>
                <?php
                if (isset($_POST["weight"])){
                    $h = $_POST["long"]*$_POST["long"]*22;
                    $bmi = $_POST["long"]
                    $i = $h - $_POST["weight"];
                    print("体重:". htmlspecialchars($_POST["weight"])."kg". "<br>");
                    print("BMI:". )
                    print("理想:". $h . "kg". "<br>");
                    print("後". $i ."kgで理想体重です");
                }
                ?>
            </div>
            <form action="ouyou3.php" method="post">
                <label for="long">身長(m):</label>
                <input id="long" type="number" step="0.01" name="long">
                <label for="weight"><br>体重(kg):</label>
                <input id="weight" type="number" name="weight">
                <br><input type="submit" value="送信する">
            </form>
        </body>
     </html>