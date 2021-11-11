<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    ?>

    練習問題1 じゃんけん<br>
    出す手を選んで勝負してください。<br>

    <form action="battle.php" method="POST">
    <input type="radio" name="playerHand" value="グー"><label for="">グー</label><br>
    <input type="radio" name="playerHand" value="チョキ"><label for="">チョキ</label><br>
    <input type="radio" name="playerHand" value="パー"><label for="">パー</label><br>
    <button type="submit">勝負する</button>
    </form>

</body>
</html>