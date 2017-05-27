<?php
error_reporting(0);
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
include_once("config.php");
global $appid,$user,$userdata,$db;

if(!$user) return;
if($_POST["nick"]){
 $uid = $user->getUserId();
 $userdata['nick']=$_POST['nick'];
 $userdata['fname']=$_POST['fname'];
 $userdata['lname']=$_POST['lname'];
 $userdata['e-mail']=$_POST['e-mail'];
 savedb();
 if($_FILES['pic']['tmp_name']!=''){
 $userpic = "gs://$appid/{$uid}.jpg";
 move_uploaded_file($_FILES['pic']['tmp_name'],$userpic);
 }
 savedb();
 $json = json_encode($userdata, JSON_PRETTY_PRINT);
 $userfile = "gs://$appid/user_$uid.json";
 file_put_contents($userfile,$json);
 echo "<br>บันทึกเรียบร้อย <a href='twol.php?p=edituser'>ตกลง</a>";
 return;
}
?>

<?php
 error_reporting(0);
 $appid = "web592group05.appspot.com";
 $page = $_GET['p'];
 if($page=='') $page='Comment';
 $title = $page;
 function panel_include($title,$file,$ptype='default'){
echo "<div class='panel panel-$ptype'>";
echo "<div class='panel-heading'>$title</div>";
echo "<div class='panel-body'>";
if(file_exists($file)){
 include($file);
}else{
 echo "ไม่พบไฟล์ $file ";
}
echo "</div>";
echo "</div>";
 }

use google\appengine\api\cloud_storage\CloudStorageTools;
function userpic($uid){
 global $appid;
 $userpic="gs://$appid/{$uid}.jpg";
 if(!file_exists($userpic)){
 return "user.png";
 }
 return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
}
?>

<?php
 readfile("gs://$appid/header.html");
?>

<div class="container">
<div class="col-md-3 col-md-offset-4">
<?php panel_include("User","work1_user.php"); ?>
</div>
</div>

<form method="post" action="" enctype="multipart/form-data">
<div class="form-group col-md-12" >
 <label for="nick">Nick Name</label>
 <input class="form-control" type='text' name='nick' value="<?=$userdata['nick'] ?>">
</div>
<div class="form-group col-md-6">
<label for="file">First Name</label>
<input class="form-control" type='text' name='fname' value="<?=$userdata["fname"]?>">
</div>
<div class="form-group col-md-6">
<label for="file">Last Name</label>
<input class="form-control" type='text' name='lname' value="<?=$userdata["lname"]?>">
</div>
<div class="form-group col-md-6">
<label for="file">E-mail</label>
<input class="form-control" type='e-mail' name='e-mail' value="<?=$userdata["e-mail"]?>">
</div>
<div class="form-group col-md-6">
<label for="file">Picture</label>
<input class="form-control" type='file' name='pic'>
</div>
<button class="btn btn-primary"> Save </button>
</form><br><br><br>

