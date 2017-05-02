<?php
require "./iplphp.php";
$sql = "SELECT InventoryPickList.PickQty, InventoryTransactions.TransactionType, InventoryShrinkage.Reason
FROM InventoryPickList
INNER JOIN InventoryTransactions 
ON InventoryPickList.IPL_TransType = InventoryTransactions.TransactionType
INNER JOIN InventoryShrinkage
ON InventoryPickList.IPL_TransType = InventoryShrinkage.IS_TransType";

$result = mysqli_query($link,$sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> PickQty: ". $row["PickQty"]. "<br> Transaction Type  ". $row["Transaction Type"]. "<br> Reason " . $row["Reason"] . "<br>";
     }
} else {
     echo "0 results";
}
    
    
?>