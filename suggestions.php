<!doctype html>
<html>
	<head>
	<title>	StringFun </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="search.js"></script>
	<script type="text/javascript" src="jquery-1.11.2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="all_page.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/w3full.css">
	<link rel="stylesheet" type="text/css" href="../css/w3.css">
	<link rel="stylesheet" type="text/css" href="http://www.w3schools.com/w3css/w3.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="suggestions.css">
	
	</head>
<body>
	<style type="text/css">
	.field{width: 100%;}
	</style>
	<div class="top-heading" style="width:100%">
	<header class="w3-container teal">
  	<h1>String Fun</h1>
  	<h2> Have fun with strings </h2>
	</header>
	</div>
	<div>
	<nav class="navbar navbar-default top-nav">
  <div class="container-fluid ">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Menu</a>
    </div>
    <div>
      	<ul class="nav navbar-nav">
	        <li><a href="index.php">Home</a></li>
	        <li><a href="encryption.php">Encryption</a></li>
	        <li class="active"><a href="suggestions.php">Suggestions</a></li> 
	        
      	</ul>
    	</div>
  	</div>
	</nav>
	</div>
<!--********************      PAGE CONTENT STARTS   **************************************************************** -->
<div class="content">	
	<div class="form">
	<h4> Have Suggestions for us !</h4>
	<h4> Please Feel Free To share with us.</h4>
	<br>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		<div class="form-field">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" class="form-control input-sm" required><br><br>
		</div>	
		<div class="form-field">
			<label for="email">Email-ID:</label>
			<input type="text" id="email" name="email" class="form-control input-sm" required><br><br>
		</div>
		<div class="form-field">	
			<label for="subject">Subject:</label>
			<input type="text" id="subject" name="subject" class="form-control input-sm" required><br><br>
		</div>
		<div class="form-field">	
			<label for="mssg">Message:</label><br>
			<textarea id="mssg" name="mssg" class="form-control input-sm" required rows="5" cols="50"></textarea><br><br>
		</div>	<br><br>
		<div id="result">
		<?php 
		if(isset($_POST['name'], $_POST['email'],$_POST['subject'],$_POST['mssg']))
		{
			$error=false;
			$error_notice='';
			$name=htmlentities($_POST['name']);
			$email=htmlentities($_POST['email']);
			$subject=htmlentities($_POST['subject']);
			$mssg=htmlentities($_POST['mssg']);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
             $error=true;
		     $error_notice=' Only letters and white spaces are allowed in name!';	
			 }
			 elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $error=true;
		     $error_notice=' Invalid E-mail address!';
             }
             else{
				$to = "aish@stringfun.dx.am";
				$subject = $_POST['subject'];
				$txt = $_POST['mssg'];
				$headers = "From:".$_POST['name']."\n"."Email-ID:".$_POST['email'] ;
				if(mail($to,$subject,$txt,$headers))
				{
					echo '<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span class="glyphicon glyphicon-ok"></span>
           			<strong>Message Sent! Thanks for your support.</strong></div>';
				}
				else
				{
					$error=true;
		     		$error_notice=' Some Technical Error! Please try again later.';
				}
				}
				if($error==true){
	 				echo '<div class="alert alert-danger">
	 				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 				<span class="glyphicon glyphicon-exclamation-sign"></span>
           			<strong>ERROR!</strong>'.$error_notice.'</div>';
		}
	}
		?>
	</div>
		<div id="submit-button">
		<button type="submit" name="submit" id="submit" class="btn btn-info"><span class="glyphicon glyphicon-send"></span> Send 
		</button>
		</div>
	</form>	

	</div>
</div>	
<!--********************      PAGE CONTENT ENDS   **************************************************************** -->
<div id="visitors-count" class="label label-success w3-card-2">
	Total Visitors 
	<span class="badge"> <?php include 'visitor_count.php' ?> </span>
</div>	

<div id="footer" class="w3-container black">
	&copy; 2015 Aishwarya Mittal 
</div> 
</body>
</html>