<?php 
	if(isset($_POST['input']))
	 echo sha1(htmlentities($_POST['input']));
?>	