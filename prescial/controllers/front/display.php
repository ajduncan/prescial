<?php
// This file must be placed at the root of the module's folder.
global $smarty;
include('../../config/config.inc.php');
include('../../header.php');
 
$smarty->display(dirname(__FILE__).'/display.tpl');
 
include('../../footer.php');
?>