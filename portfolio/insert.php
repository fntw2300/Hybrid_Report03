<!--
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>jQuery Mobile</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<style>
   li { list-style:none; }
  .picture { list-style:none; padding:0; margin:0; }
  .picture li { float:left; width:50%;}
  .picture li a {display:block; margin:5px; border: 1px }
  .picture li img { display:block; width:50%;  height:auto;}
  .picture li img:hover { display:block; width:100%;  height:auto;} 
    table, th, td {  border: 1px solid white; border-collapse: collawpse;}
</style>
</head>

<body>
<div data-theme="b">
     <div data-role="page" >
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         TelNo: <input type = "text" name = "skill" />
         Email: <input type = "text" name = "career" />
         <input type = "submit" onClick="location.href='index.php#db'"/>
      </form>
      </div>	
</div>	
</body>
</html>
-->

<?php
$jb_conn = mysqli_connect("127.0.0.1", "root", "", "db" );
mysqli_set_charset($jb_conn,"utf8"); 

$jb_sql = "insert into language(num, name, skill, career)
values(null,'$_POST[name]', '$_POST[skill]', '$_POST[career]')";
mysqli_query( $jb_conn, $jb_sql );
mysqli_close($jb_conn);
?>