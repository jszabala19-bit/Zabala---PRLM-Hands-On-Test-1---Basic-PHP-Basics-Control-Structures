<?php 
//NAME: Zabala, Jan Chrysler S.
//SECTION: CYB - 201
//SUBJECT: 6DWEB
//DATE: December 4, 2025
    $user = 'Chrysler';
    $pagbati = 'Hello ' . $user . '!';
    $offer = ["Shoes", 3, 2000, 1750];

    $reg_price = $offer[1] * $offer[2];
    $offer_price = $offer[1] * $offer[3];
    $saving = $reg_price - $offer_price;
    require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Maskulado's Shoe Apparel - Home</title>
    <link rel="stylesheet" href="DWEBPrelim/css/styles.css?v+">
</head>
<body>
    <h2> <?= $pagbati ?> </h2>
    <div class="circle">
        <h2>Saved ₱<?= $saving ?></h2>
    </div>
    <h3> With the upcoming Christmas, <br> Maskulado's Shoe Apparel by Jc is having a Christmas Sale! 
        <br> What are you waiting for? Join us now!</h3>
    <h4> Buy <?= $offer[1] ?> <?= $offer[0] ?> and get a discounted price!</h4>
    <h4> Then: ₱<?= $reg_price ?> - Now for only: ₱<?= $offer_price ?></h4>
    <?php include 'footer.php'; ?>
</body>
</html>