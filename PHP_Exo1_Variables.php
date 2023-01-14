<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emploi</title>
</head>
<body>
<main>

<?php
$bonjour = "Bonjour,";
$salire = "2000€.";
$informatique = "l'informatique.";
$informatiqueDada = "l'informatique est mon dada.";
$moyenne = "11.5.";


?>

<?php echo "<b>".$bonjour."</b>";?>
<p>Le salaire auquel j'aspire est de : <?php echo "<b>". $salire."</b>";  ?></p>
<p>La branche dans laquelle je veux travailler est : <?php echo "<b>".$informatique . "</b>";?></p>
<p>Pour préciser, <?php echo "<b>".$informatiqueDada . "</b>";?></p>
<p>La note moyenne que j'ai obtenu au bac est  <?php echo "<b>".$moyenne . "</b>";?></p>

</main>

</body>
</html>