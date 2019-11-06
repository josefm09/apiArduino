<!DOCTYPE html>
<html>
<body>
<?php
include ('../settings/conection.php');
   
$sql = 'SELECT reg_hash FROM registro';
   mysql_select_db('arduino');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo $row['reg_hash'];
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?> 
</body>
</html>
