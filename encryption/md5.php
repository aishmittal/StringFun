<?php 
	if(isset($_POST['input']))
	 echo md5(htmlentities($_POST['input']));
?>	