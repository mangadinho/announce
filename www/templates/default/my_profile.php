
<?php 
require_once "../../functions.php";
require_once "../../config.php";

 $content = render("compte.tpl", $params=array());

include 'header.php';
include 'aside.php';
?>
      <?=$content?>
     </div>
   </div>
</div>	
<?
include 'footer.php';
?>				 
							
							
