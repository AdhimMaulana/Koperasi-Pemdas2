<?php

$user = $_POST['username'];

if ($user =='schoolmart' && $_POST['pass'] =='schoolmart') {
   echo "";
   header("location: home.php");
}
else {
   echo "Gagal Login";
   header("location: index.php");
} 
?>