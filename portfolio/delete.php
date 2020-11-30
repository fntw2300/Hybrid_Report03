<!--
<html>
   <body>
     <meta charset="UTF-8">
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         <input type = "submit" />
      </form>
   </body>
</html>
-->

<?php
$jb_conn = mysqli_connect("127.0.0.1", "root", "", "db" );
mysqli_set_charset($jb_conn ,"utf8"); 

if (mysqli_connect_errno($jb_conn)){  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  

$sql="DELETE FROM language WHERE name='$_POST[name]'";
$rs = mysqli_query($jb_conn ,$sql);  
mysqli_close($jb_conn ); 
?>


