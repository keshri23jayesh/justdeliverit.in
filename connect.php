<?php 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'justixcl_jayesh');
 define('DB_USER','justixcl_jay');
 define('DB_PASSWORD','jay@123'); 
 
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
 
  $name=$_POST['name'];
  $mobile=$_POST['mob'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $landmark=$_POST['landmark'];
  $prodis=$_POST['prodis']; 
  $protype=$_POST['protype']; 

date_default_timezone_set("Asia/Kolkata");
$time =  date("h:i:sa");
$date = date("Y/m/d") ;
 
$query = "INSERT INTO info(name,mobile,email,address,landmark,prodis,protype,time,date) VALUES('$name','$mobile','$email','$address','$landmark','$prodis','$protype','$time','$date')";

 $res = mysql_query($query) or die("Error in your query");
 if($res) {
    header("Location: success.php");
 }
 else {
    echo "Error in insertion!";
 }
   
  
  
  ?>