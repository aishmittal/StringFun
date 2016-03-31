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
	</head>
<body>
	<script type="text/javascript" src="main.js"></script>
	<script type="text/javascript" src="home_ajax.js"></script>
	<div style="width:100%" class="top-heading">
	<header class="w3-container teal">
  	<h1>String Fun</h1>
  	<h2> Have fun with strings </h2>
	</header>
	</div>

<div>
	<nav class="navbar navbar-default top-nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Menu</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="encryption.php">Encryption</a></li>
        <li><a href="suggestions.php">Suggestions</a></li> 
        
      </ul>
    </div>
  </div>
</nav>
</div>
<div>
	<nav class="w3-sidenav grey-I3 w3-card-2" id="side-nav">
  	 <ul class="nav nav-pills nav-stacked">
	  	  <li class="active"><a href="#reverse" id="reverse_link">Reverse</a></li>		
		  <li><a href="#shuffle" id="shuffle_link">Shuffle</a></li>		
		  <li><a href="#count" id="count_link">Alphabet-count</a></li>		
		  <li><a href="#cap" id="cap_link">Capitilize</a></li>		
		  <li><a href="#decap" id="decap_link">Decapitilize</a></li>		
  	 </ul>
	</nav>
</div>
<!--********************      PAGE CONTENT STARTS   **************************************************************** -->
<div class="content">
	<div id="reverse" style="margin-left:25%">
		<h2> Reversing a String </h2><br>
		Input String <br/>
		<textarea  id="rev_input_string" class="input-field"  rows="3" cols="80"></textarea>
			<br>Reversed String<br>
		<textarea id="reverse_string" class="output-field" readonly rows="3" cols="80"></textarea>
	</div>

	<div id="shuffle" style="margin-left:25%">
		<h2> Shuffling a String </h2><br>
		Input String <br/>
		<textarea  id="sfl_input_string" class="input-field" rows="3" cols="80"></textarea>
			<br>Shuffled String<br>
		<textarea id="sfl_string" class="output-field" readonly rows="3" cols="80"></textarea>
	</div>

	<div id="count" style="margin-left:25%">
			<h2>Counting each alphabet in String </h2><br>
			Input String <br/>
			<textarea id="count_input_string" class="input-field" rows="3" cols="80"></textarea>
			<br>
			<div id="count_result"></div>
	</div>

<div id="cap" style="margin-left:25%">
		<h2> Capitilize a String </h2><br>
		Input String <br/>
		<textarea id="cap_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		Capitilized String<br>
		<textarea id="cap_string" class="output-field" readonly rows="3" cols="80"></textarea>
</div>
	
<div id="decap" style="margin-left:25%">
		<h2> Decapitilize a String </h2><br>
		Input String <br/>
		<textarea id="decap_input_string" class="input-field" rows="3" cols="80"></textarea>
		<br>
		Decapitilized String<br>
		<textarea id="decap_string" class="output-field" readonly rows="3" cols="80"></textarea>
</div>
</div>
<!--********************      PAGE CONTENT ENDS   **************************************************************** -->
<div id="visitors-count" class="label label-success w3-card-2">
	Total Visitors 
	<span class="badge"> <?php include 'visitor_count.php' ?></span>
</div>	

<div id="footer" class="w3-container black">
	
	&copy; 2015 Aishwarya Mittal 
</div> 
</body>	
</html>