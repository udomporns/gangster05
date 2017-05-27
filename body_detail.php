<?php
 error_reporting(0);
 use google\appengine\api\users\User;
 use google\appengine\api\users\UserService;
 use google\appengine\api\cloud_storage\CloudStorageTools;
 
 include_once("config.php");  
 global $appid,$db;  
 $gid=$_GET['g'];
 $pid=$_GET['i'];  
 if(isset($db['items'][$gid][$pid])){
   $grec=$db['groups'][$gid];
    $prec=$db['items'][$gid][$pid];   
  }else{
   echo "ข้อมูลไม่ถูกต้อง";
   return;
 }
 
 echo "<center><h1>$prec[name]</h1></center><br>";
 echo "<center><h1>ID : $pid </h1></center><br>";
 echo "<center><div><h6>Price : $prec[price]</div></center></h6>";
 echo "<center><div><h6>$prec[detail]</div></center><br></h6>";
 
 if(isset($prec['picfile']) && file_exists($prec['picfile'])){
   $img=CloudStorageTools::getImageServingUrl($prec['picfile'],["size"=>250]);   
   echo "<center><img src='$img' class='img-circle' width='300' height='300'>";
 }
?>

<?php

if(UserService::isCurrentUserAdmin()){
 echo "<br><br><br><a href='twol.php?p=additem&g=$gid&i=$pid'>Edit</a></center>";
} 


?>