<?php

$email    = $_POST["email"];
$password = $_POST["password"];
$ps5      = $_POST["ps5"];
$xbox     = $_POST["xbox"];
$nintendo = $_POST["nintendo"];

$ps5Cost      = 559.99;
$xboxCost     = 547.98;
$nintendoCost = 299.99;

$ps5Total      = $ps5 * $ps5Cost;
$xboxTotal     = $xbox2 * $xboxCost;
$nintendoTotal = $nintendo * $nintendoCost;

$shipping     = $_POST["shipping"];
$shippingCost = 0;

if ($shipping == 'Free')
  {
    $shippingCost = 0;
  }
else if ($shipping == 'Standard')
  {
    $shippingCost = 5;
  }
else if ($shipping == 'Overnight')
  {
    $shippingCost = 50;
  }

$totalPrice = $ps5Total + $xboxTotal + $nintendoTotal + $shippingCost;
?>

<html>
    <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, intial-scale=1">
    <title>Total</title>
    </head>
    <body>
        <h2>Thank you for your visit</h2>
        <br>
        <p>Entered Password is: <?php echo $password;?></p>
        <br>
        <h3>Your Recipt</h3>
        <br>
    <table>
<tbody>
<tr>
<td>Items</td>
<td>Quantity</td>
<td>Cost</td>
<td>Sub total</td>
</tr>
<tr>
<td>
<div>
<div>PS5</div>
</div>
</td>
<td>
<p> <?php
echo $ps5;
?> </p>
</td>
<td><?php
echo $ps5Cost;
?></td>
<td><?php
echo $ps5Total;
?></td>
</tr>
<tr>
<td>
<div>
<div>Xbox Series X</div>
</div>
</td>
<td><?php
echo $xbox;
?></td>
<td><?php
echo $ps5Cost;
?></td>
<td><?php
echo $ps5Total;
?></td>
</tr>
<tr>
<td>
<div>
<div>Nintendo Switch</div>
</div>
</td>
<td><?php
echo $nintendo;
?></td>
<td><?php
echo $nintendoCost;
?></td>
<td><?php
echo $nintendoTotal;
?></td>
</tr>

<tr>
<td>
<div>
<div>Shipping</div>
</div>
</td>


<td><?php
echo $shipping;
?></td>
<td></td>
<td><?php
echo $shippingCost;
?></td>
</tr>

<tr>
<td>Total:</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><?php
echo $totalPrice;
?></td>
</tr>
</tbody>
</table>
    </body>
    <style>
        
        td, th {
    border: 1px solid #777;
    padding: 0.5rem;
    text-align: center;
}
 
table {
    border-collapse: collapse;
}
 
tbody tr:nth-child(odd) {
    background: #eee;
}
caption {
    font-size: 0.8rem;
}
    </style>
</html>
