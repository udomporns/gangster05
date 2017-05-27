<?php
 error_reporting(0);
 $gid=$_GET['g'];
 use google\appengine\api\users\UserService;
 use google\appengine\api\cloud_storage\CloudStorageTools;
 if(!isset($db['groups'][$gid])){
   echo "ไม่พบข้อมูลกลุ่มสินค้า";
   return;
 } 
 $grec = $db['groups'][$gid];
 $list = [];
 if(isset($db['items'][$gid]))$list=$db['items'][$gid];
 
 echo "<section>
 <div class='row'>
 <div class='container'>
 <div class='col-lg-12 text-center'>
 <h1>$grec[name]</h1>"; 
 echo "</div>"; 
 
 foreach($list as $pid=>$prec){
   $imgtag="";
   if(isset($prec['picfile']) && file_exists($prec['picfile'])){
	   $img=CloudStorageTools::getImageServingUrl($prec['picfile'],["size"=>300]);
	   $imgtag = "<img src='$img' class='img-circle' width='250' height='250'>";
   }
   echo "<div class='col-xs-6 col-md-4'>
		 <br><br><center><h4>ID : $pid<br>
	Name : $prec[name]<br></h4>
		 $imgtag<br>
	<h4><br><br>Price : $prec[price]<br></h4>
		 <a href='twol.php?p=detail&g=$gid&i=$pid' class='thumbnail' target='_blank'>Detail</a>";
   
   if(UserService::isCurrentUserAdmin()){
      echo "<a href='twol.php?p=additem&g=$gid&i=$pid' class='thumbnail'>Edit</a>";
   }
   echo "</div>";
 }
 
 echo "</center></div></div>"; 
 if(UserService::isCurrentUserAdmin()){
    echo "<br><a href='twol.php?p=additem&g=$gid'>Add</a></section>";
 }
 ?>