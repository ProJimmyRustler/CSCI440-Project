<?php
if(isset($_GET[''])){ 
$product=$_GET['']; 
//connect  to the database 
$db=mysql_connect  ("servername", "username",  "password") or die ('I cannot connect to the database  because: ' . mysql_error()); 
//-select  the database to use 
$mydb=mysql_select_db("csci440project"); 
//-query  the database table 
$sql="SELECT  * FROM products WHERE ID=" . $id; 
$result=mysql_query($sql); 
//-create  while loop and loop through result set 
while($row=mysql_fetch_array($result)){ 
  $ =$row['']; 
            $=$row['']; 
	            $=$row['']; 
            $=$row['']; 
//-display  the result of the array 
echo  "<ul>\n"; 
echo  "<li>" . $ . " " . $ .  "</li>\n"; 
echo  "<li>" . $ . "</li>\n"; 
echo  "<li>" . "<a href=mailto:" . $ .  ">" . $ . "</a></li>\n"; 
echo  "</ul>"; 
} 
} 
?>