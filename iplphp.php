 <?php
$database_host = "pmclass.mccdgm.net";
$username = "pmclass";
$password = "PMclass2017";
$database_name = "pmclass_invenmgmnt";


define("DATABASE_HOST", "pmclass.mccdgm.net");
define("DATABASE_USERNAME", "pmclass");
define("DATABASE_PASSWORD", "PMclass2017");
define("DATABASE_NAME", "pmclass_invenmgmnt");

$link = mysqli_connect($database_host, $username, $password)
or die("Error connecting to database" . mysql_error());

$link_open = mysqli_select_db($link, $database_name);
echo "Connected to database!"

?>