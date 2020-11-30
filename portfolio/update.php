<!--
<html>
   <body>
     <meta charset="UTF-8">
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         TelNo: <input type = "text" name = "skill" />
         Email: <input type = "text" name = "career" />
         <input type = "submit" />
      </form>
   </body>
</html>

-->

<?php
$jb_conn = mysqli_connect("127.0.0.1", "root", "", "db" );
mysqli_set_charset($jb_conn,"utf8"); 

$updateSQL = "update language set skill = '$_POST[skill]', career = '$_POST[career]' where name = '$_POST[name]'";
 
mysqli_query($jb_conn,$updateSQL);
mysqli_close($jb_conn);
?>