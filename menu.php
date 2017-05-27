 <?php
   include_once("config.php");
   $list = [
     ["home","HOME"],
	 ["product","PRODUCT"],
	 ["about","ABOUT"]	 
   ];
   
 ?>
 <ul class="nav navbar-nav">
  <?php
    foreach($list as $m){
	 $cs="";
	 if($m[0]==$page)$cs=" class=active ";
	 if($m[0]=="product") 
	    include("menu_product.php");
	 else 
	    echo "<li $cs><a href=\"twol.php?p=$m[0]\">$m[1]</a></li>";
	}
  ?>
</ul>
<ul class="nav navbar-nav navbar-right">
 <?php
   include("menu_user.php");
 ?> 
</ul>
        