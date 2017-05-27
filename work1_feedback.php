<Script>
$(document).ready(function(){

  // กรณี กดปุ่ม like
  $('#like-btn').click(function(){
     $.ajax({
           url: 'like.php?id=twol.php',               
           success: function( data ) {
                      if(data=='true'){
                            $('#like-btn').attr('disabled','disabled');
                      }
                      else{
                           alert('LIKE');
                      }
           }
      });
  });
});
</Script>

<?php
 use google\appengine\api\users\UserService;
 global $appid,$page,$title,$userdata;
 //ไฟล์ความคิดเห็นจะบันทึกไว้ในไฟล์ json ตามชื่อ $page
 //เช่น หน้า home ก็จะบันทึกข้อมูลไว้ในไฟล์ home.json
 $fbfile = "gs://$appid/$page.json";
 $fbdata = array();
 //ถ้ามีไฟล์ข้อมูลให้อ่านไฟล์มาแสดงผล
 if(file_exists($fbfile)){
 $fbjson = file_get_contents($fbfile);
 $fbdata = json_decode($fbjson, true);
 echo "<hr>";
 foreach($fbdata as $fb){
 $text = htmlspecialchars($fb['feedback']);
 $time=date("d/m/Y H:i:s",$fb['time']);
 //มีการเรียก userpic เพื่อแสดงภาพผู้ใช้
 $pic = userpic($fb['user']);
 echo "<div class='row'>";
 echo "<div class='col-xs-1'><img src='$pic' width='48'></div>";
 echo "<div class='col-xs-10'>";
 echo "<center><a href='#'>$fb[name]</a><br>$text <br>";
 echo "<a href='#'><img src='like.png' border='0' id='like-btn'>&nbsp;<a href='#'><img src='star.png' border='0' id='like-btn'></a> $time<hr>";
 echo "</div></center>";
 echo "</div>";
 }
 }

 //กรณีที่ผู้ใช้ login แล้วให้สามารถแสดงความคิดเห็นได้   <img src='star.png' border='0'> <button id="like-btn">Like!</button>
 $user = UserService::getCurrentUser();
 if($user){
 include("work1_feedback_add.php");
 }
?>