<?php
   define('DB_SERVER', 'localhost:3307');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'test1');
   $port = '3307';
   $dbConn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
   $projectName = $_POST["deleteProjectValue"];

   if($dbConn){
       mysqli_select_db($dbConn, DB_DATABASE);
       $result = mysqli_query($dbConn, "DELETE FROM `projects` WHERE projectName='$projectName'");
       
       
       mysqli_close($dbConn);
       header('Location: http://localhost:8080/projectmanagement/deleteproject.html');
       exit;
   }else{
       die("<strong>Error in connecting DB</strong>");
   }


?>


