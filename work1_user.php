<?php
 // ส่วนตั้งค่าเรียกใช้งาน UserService ของ Google
 use google\appengine\api\users\User;
 use google\appengine\api\users\UserService;
 global $user,$userdata,$appid,$db;

 $user = UserService::getCurrentUser();
 if($user){
 $uid = $user->getUserId();
 $userfile = "gs://$appid/user_$uid.json";
 $userdata = array();
 if(file_exists($userfile)){
 // จะโหลดข้อมูลในไฟล์ json
 $filedata = file_get_contents($userfile);
 $userdata = json_decode($filedata,true);
 }else{
 $userdata['nick']=$user->getNickname();
}

 $url = UserService::createLogoutUrl('/twol.php');
 // แสดงภาพผู้ใช้โดยการเรียกฟังก์ชัน userpic จากข้อที่ 1
echo "<center><img src='".userpic($uid)."' width='200'><br>";
 echo $userdata['nick'];
 echo "<br><a href='twol.php?p=edituser'>Edit User</a>";
 echo "<br><a href='$url'>Logout</a>";
 }else{
 $url = UserService::createLoginUrl('/twol.php');
 echo "<a href='$url'>Login or Register</a></center>";
 }
?>