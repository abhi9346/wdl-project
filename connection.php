<?php
$username="root";
$password ="";
$sever ='localhost';
$db='login';

$con=mysqli_connect($server,$username,$db);


if($con){
   //echo "conection successful";
   ?>
<script>
alert('connection successful');
</script> <?php

} else{ echo "no connection" ; die("no connection".mysqli_connect_error()); } ?>