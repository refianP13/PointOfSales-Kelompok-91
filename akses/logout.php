<?php
session_start();
session_destroy();
$op=$_GET['op'];
if($op=="outlet"){
header("location:../outlet/login.php");	
}
else{
header("location:../login.php");	
}
?>