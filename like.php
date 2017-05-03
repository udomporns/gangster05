 <?php

session_start();

$member_id=$_SESSION['member_id'];   //   Get member's Id from session

//  Let check like's status from table called 'like'

if(true){      //  like already
   echo 'true';
} 
else{     // not yet

   // insert new record
   echo 'false';
}
?>