<?php
// Database settings
// database hostname or IP. default:localhost
// localhost will be correct for 99% of times
//define("HOST", "localhost");
// Database user
//define("DBUSER", "root");
// Database password
//define("", "root");
// Database name
//define("DB", "db_test");
 
############## Make the mysql connection ###########
$conn = mysqli_connect("localhost", "root", "","db_test");
if (!$conn)
{
    // the connection failed so quit the script
    die('Could not connect !<br />Please contact the site\'s administrator.');
}

?>
