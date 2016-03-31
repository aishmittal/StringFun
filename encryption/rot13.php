<?php 
	if(isset($_POST['input']))
	 echo str_rot13(htmlentities($_POST['input']));
?>	