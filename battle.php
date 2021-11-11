<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
$hands = ['グー','チョキ','パー'];
if(isset($_POST['playerHand'])){
    $playerHand = $_POST['playerHand'];

    $key = array_rand($hands);
    $pcHand = $hands[$key];

}

if($playerHand == $pcHand){
 $result = 'あいこ';
}elseif($playerHand == 'グー' && $pcHand == 'チョキ'){
    $result = '勝ち';
}elseif($playerHand == 'チョキ' && $pcHand == 'パー'){
    $result = '勝ち';
}elseif($playerHand == 'パー' && $pcHand == 'グー'){
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