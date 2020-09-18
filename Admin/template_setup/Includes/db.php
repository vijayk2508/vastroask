    <?php

//$servername = "localhost";

$servername = "sql214.main-hosting.eu";

$username = "u505645449_vastr";

$password = "vastroask.com";

$database = "u505645449_vastr";


$connection=mysqli_connect($servername,$username,$password,$database) or die("Server Error");


mysqli_select_db($connection,$database) or die("Database error");

if($connection!=true)
{
    mysqli_close($connection);
}
    
?>


