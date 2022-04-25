<?Php
$conn = new mysqli("localhost", "root", "", "unimedia_senin");
if($conn->connect_error)
{die("Error : ".$conn->connect_error);}
?>