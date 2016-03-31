<?php
	if(isset($_POST['input'],$_POST['algo']))
		{
			$input=htmlentities($_POST['input']);
			$algo=htmlentities($_POST['algo']);
			echo hash($algo, $input);

		}
?>