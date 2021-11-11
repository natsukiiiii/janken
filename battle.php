<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $guu = 'グー';
    $choki = 'チョキ';
    $paa = 'パー';
    
$hands = [$guu,$choki,$paa];
if(isset($_POST['playerHand'])){
    $playerHand = $_POST['playerHand'];

    $key = array_rand($hands);
    $pcHand = $hands[$key];

}

if($playerHand == $pcHand){
 $result = 'あいこ';
}elseif($playerHand == $guu && $pcHand == $choki){
    $result = '勝ち';
}elseif($playerHand == $choki && $pcHand == $paa){
    $result = '勝ち';
}elseif($playerHand == $paa && $pcHand == $guu){
    $result = '勝ち';
}else{
    $result = '負け';
}
    ?>
結果は・・・<br>

<?= $result?><br>

あなた　： <?= $playerHand?><br>
コンピュータ　：<?= $pcHand?><br>

<a href="index.php">again battle</a>


</body>

</html>