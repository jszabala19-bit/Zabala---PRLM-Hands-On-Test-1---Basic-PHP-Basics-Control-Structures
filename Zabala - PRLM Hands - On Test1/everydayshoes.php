<?php 
//NAME: Zabala, Jan Chrysler S.
//SECTION: CYB - 201
//SUBJECT: 6DWEB
//DATE: December 4, 2025
    $user = "Chrysler";
    $greet = 'Hello ';

    if ($user) {
        $greet = 'Welcome back ' . $user . '!';
    }

    $product = "Everyday Shoes";
    $cost = 2000;

    for ($i = 1; $i <= 15; $i++) { 
    $subtotal = $cost * $i;
    $discount = ($cost / 40) * ($i * 5); 
    $totals[$i] = $subtotal - $discount;
    }
    require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Maskulado's Shoe Collection - Products</title>
    <link rel="stylesheet" href="DWEBPrelim/css/styles.css?v+">
</head>
<body>

<h2> <?= $greet ?> </h2>
<h2> Product: <?= $product ?> </h2>

<h2> Discounted Price List: </h2>
<table>
    <tr>
        <th> Quantity </th>
        <th> Price (₱) </th>
    </tr>
    <?php foreach ($totals as $quantity => $price) { ?>
    <tr>
        <td> <?= $quantity ?> <?= ($quantity == 1) ? "pair" : "pairs" ?> </td>
        <td> ₱<?= $price?> </td>
    </tr>
    <?php } ?>
</table>

<?php include 'footer.php'; ?>

</body>
</html>