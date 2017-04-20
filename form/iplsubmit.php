<?php
$order_number = $_POST['order_number'];

$sku = $_POST['sku'];

$pick_qty = $_REQUEST['pick_qty'];

$qty_avaliable = $_REQUEST['qty_avaliable'];

$item_description =  $_REQUEST['item_description'];

$unit = $_REQUEST['unit'];

$bin_number = $_REQUEST['bin_number'];

$location = $_REQUEST['location'];
require "./iplphp.php";
$sql = "INSERT INTO InventoryPickList (OrderNumber, SKU, PickQty, QtyAvaliable, ItemDescription, Unit, Bin, Location) VALUES ('$order_number', '$sku', '$pick_qty', '$qty_avaliable', '$item_description', '$unit', '$bin_number', '$location')";

$result = (mysqli_query ($link, $sql));
if ($result) {
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error;    
}

//mysqli_close($link)
?>