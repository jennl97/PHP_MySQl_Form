 <?php
$database_host = "pmclass.mccdgm.net";
$username = "pmclass";
$password = "PMclass2017";
$database_name = "pmclass_invenmgmnt";


define("DATABASE_HOST", "pmclass.mccdgm.net");
define("DATABASE_USERNAME", "pmclass");
define("DATABASE_PASSWORD", "PMclass2017");
define("DATABASE_NAME", "pmclass_invenmgmnt");

mysql_connect($database_host, $username, $password)
or die("Error connecting to database" . mysql_error());
?>