﻿           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCT<span class="caret"></span></a>
              <ul class="dropdown-menu">
<?php
 include_once("config.php");
 foreach($db['groups'] as $id=>$g){
   echo "<li><a href='twol.php?p=product&g=$id'>$g[name]</a><li>";
 }
?>			  
     </ul>
   </li>
