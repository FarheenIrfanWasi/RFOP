<?php
//get values pass from form in login.php file
    $username = $_POST['username'];
    $password = $_POST['pass'];

//to prevent my sql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
     $password = mysql_real_escape_string($password);
     // connect to the server
     mysql_connect("localhost", "root", "");
     mysql_select_db("login");
     //query
     $result = mysql_query("select * from users where username = '$username' and password = '$password'")
               or die("query failed" .mysql_error());
               $row = mysql_fetch_array($result);
               if ($row['$username'] == $username && $row['password'] == $password) {
               	echo "login successfull" .$row['$username'];
               }else{
               	echo "failed to login";
               }




?>
