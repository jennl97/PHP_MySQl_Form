<?php
require "./iplphp.php";
$sql = "SELECT InventoryShrinkage.Reason, InventoryTransactions.Quantity
FROM InventoryShrinkage
LEFT JOIN InventoryTransactions
ON InventoryShrinkage.IS_TransType = InventoryTransactions.TransactionType";

$result = mysqli_query($link,$sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Reason: ". $row["Reason"]. "<br> Quantity ". $row["Quantity"]. "<br>";
     }
} else {
     echo "0 results";
}
    
    
?>