 <?php
$database_host = "pmclass.mccdgm.net";
$username = "pmclass";
$password = "PMclass2017";
$database_name = "pmclass_invenmgmnt";


define("DATABASE_HOST", "pmclass.mccdgm.net");
define("DATABASE_USERNAME", "pmclass");
define("DATABASE_PASSWORD", "PMclass2017");
define("DATABASE_NAME", "pmclass_invenmgmnt");

$link = mysql_connect($database_host, $username, $password)
or die("Error connecting to database" . mysql_error());

$order_number = mysqli_real_escape_string($link, $_REQUEST['order_number']);

$sku = mysqli_real_escape_string($link, $_REQUEST['sku']);

$pick_qty = mysqli_real_escape_string($link, $_REQUEST['pick_qty']);

$qty_avaliable = mysqli_real_escape_string($link, $_REQUEST['qty_avaliable']);

$item_description = mysqli_real_escape_string($link, $_REQUEST['item_description']);

$unit = mysqli_real_escape_string($link, $_REQUEST['unit']);

$bin_number = mysqli_real_escape_string($link, $_REQUEST['bin_number']);

$location = mysqli_real_escape_string($link, $_REQUEST['location']);

$sql = "INSERT INTO InventoryPickList (order_number, sku, pick_qty, qty_avaliable, item_description, unit, bin_number, location ) VALUES ('$order_number', '$sku', '$pick_qty', '$qty_avaliable', '$item_description', '$unit', '$bin_number', '$location')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
?>