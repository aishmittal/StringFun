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
	<script type="text/javascript" src="encrypt.js"></script>
	<script type="text/javascript" src="enc_ajax.js"></script>
	<style type="text/css">

	</style>
	<div class="top-heading" style="width:100%">
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
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="encryption.php">Encryption</a></li>
        <li><a href="suggestions.php">Suggestions</a></li> 
      
      </ul>
    </div>
  </div>
</nav>
</div>
<div style="top:10%; position:relative">
	 	<nav class="w3-sidenav grey-I3 w3-card-2" id="side-nav">
	 	<ul class="nav nav-pills nav-stacked">

 		 <li class="active"><a href="#rot13">ROT-13</a></li>
  			<li class="dropdown">
   			 <a class="dropdown-toggle" data-toggle="dropdown" href="#">SHA 
	   		 <span class="caret"></span></a>
	    	<ul class="dropdown-menu">
	      		<li><a href="#sha1" id="sha1_link">SHA-1</a></li>
	      		<li><a href="#sha224" id="sha224_link">SHA-224</a></li>
	      		<li><a href="#sha256" id="sha256_link">SHA-256</a></li>
	      		<li><a href="#sha384" id="sha384_link">SHA-384</a></li>
	      		<li><a href="#sha512" id="sha512_link">SHA-512</a></li> 
    		</ul>
  			</li>
  			<li class="dropdown">
   			 <a class="dropdown-toggle" data-toggle="dropdown" href="#">RIPEMD 
	   		 <span class="caret"></span></a>
	    	<ul class="dropdown-menu">
	      		<li><a href="#ripemd128" id="ripemd128_link">RIPEMD-128</a></li>
	      		<li><a href="#ripemd160" id="ripemd160_link">RIPEMD-160</a></li>
	      		<li><a href="#ripemd256" id="ripemd256_link">RIPEMD-256</a></li>
	      		<li><a href="#ripemd320" id="ripemd320_link">RIPEMD-320</a></li>
	      
    		</ul>
  			</li>
  			<li class="dropdown">
   			 <a class="dropdown-toggle" data-toggle="dropdown" href="#">MD 
	   		 <span class="caret"></span></a>
	    	<ul class="dropdown-menu">
	      		<li><a href="#md2" id="md2_link">MD-2</a></li>
	      		<li><a href="#md4" id="md4_link">MD-4</a></li>
	      		<li><a href="#md5" id="md5_link">MD-5</a></li>
	      
	      
    		</ul>
  			</li>
  		
</ul>
	</nav>
</div>
<!--********************      PAGE CONTENT STARTS   **************************************************************** -->
<div class="content">
	<!-- ************************* SHA ALGO *********************************************** -->
	<div id="sha1" style="margin-left:25%" class="tab">
		<h2> SHA-1 hash of a string </h2><br>
		Input String <br/>
		<textarea id="sha1_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		SHA-1 hash of string<br>
		<textarea id="sha1_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="sha224" style="margin-left:25%" class="tab">
		<h2> SHA-224 hash of a string </h2><br>
		Input String <br/>
		<textarea id="sha224_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		SHA-224 hash of string<br>
		<textarea id="sha224_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="sha256" style="margin-left:25%" class="tab">
		<h2> SHA-256 hash of a string </h2><br>
		Input String <br/>
		<textarea id="sha256_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		SHA-256 hash of string<br>
		<textarea id="sha256_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="sha384" style="margin-left:25%" class="tab">
		<h2> SHA-384 hash of a string </h2><br>
		Input String <br/>
		<textarea id="sha384_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		SHA-384 hash of string<br>
		<textarea id="sha384_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>
	
	<div id="sha512" style="margin-left:25%" class="tab">
		<h2> SHA-512 hash of a string </h2><br>
		Input String <br/>
		<textarea id="sha512_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		SHA-512 hash of string<br>
		<textarea id="sha512_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<!-- ************************* RIPEMD ALGO *********************************************** -->
	<div id="ripemd128" style="margin-left:25%" class="tab">
		<h2> RIPEMD-128 hash of a string </h2><br>
		Input String <br/>
		<textarea id="ripemd128_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		RIPEMD-128 hash of string<br>
		<textarea id="ripemd128_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="ripemd160" style="margin-left:25%" class="tab">
		<h2> RIPEMD-160 hash of a string </h2><br>
		Input String <br/>
		<textarea id="ripemd160_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		RIPEMD-160 hash of string<br>
		<textarea id="ripemd160_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="ripemd256" style="margin-left:25%" class="tab">
		<h2> RIPEMD-256 hash of a string </h2><br>
		Input String <br/>
		<textarea id="ripemd256_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		RIPEMD-256 hash of string<br>
		<textarea id="ripemd256_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>


	<div id="ripemd320" style="margin-left:25%" class="tab">
		<h2> RIPEMD-320 hash of a string </h2><br>
		Input String <br/>
		<textarea id="ripemd320_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		RIPEMD-320 hash of string<br>
		<textarea id="ripemd320_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<!-- ************************* MD ALGO *********************************************** -->
	<div id="md5" style="margin-left:25%" class="tab">
		<h2> MD-5 hash of a string </h2><br>
		Input String <br/>
		<textarea  id="md5_input_string" rows="3" cols="80" class="input-field"></textarea>
			<br>MD-5 hash<br>
		<textarea id="md5_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="md2" style="margin-left:25%" class="tab">
		<h2> MD-2 hash of a string </h2><br>
		Input String <br/>
		<textarea  id="md2_input_string" rows="3" cols="80" class="input-field"></textarea>
			<br>MD-2 hash<br>
		<textarea id="md2_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="md4" style="margin-left:25%" class="tab">
		<h2> MD-4 hash of a string </h2><br>
		Input String <br/>
		<textarea  id="md4_input_string" rows="3" cols="80" class="input-field"></textarea>
			<br>MD-4 hash<br>
		<textarea id="md4_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="rot13" style="margin-left:25%" class="tab">
		<h2> ROT-13 encoding of string </h2><br>
		Input String <br/>
		<textarea  id="rot13_input_string" class="input-field" rows="3" cols="80"></textarea>
			<br>ROT-13 encoded string<br>
		<textarea id="rot13_string" class="output-field" rows="3" cols="80" readonly></textarea>
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