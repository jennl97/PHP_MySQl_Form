<?php
require "./iplphp.php";
$sql = "SELECT InventoryPickList.SKU, InventoryTransactions.TransactionItem
FROM InventoryPickList
RIGHT JOIN InventoryTransactions
ON InventoryPickList.IPL_TransType = InventoryTransactions.TransactionType";

$result = mysqli_query($link,$sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> SKU: ". $row["SKU"]. "<br> Transaction Item ". $row["Transaction Item"]. "<br>";
     }
} else {
     echo "0 results";
}
    
    
?>