<!doctype html>
<html>
	<head>
	<title>	StringFun </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="search.js"></script>
	<script type="text/javascript" src="jquery-1.11.2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/w3full.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	</head>
<body>
	<script type="text/javascript" src="encrypt.js"></script>
	<script type="text/javascript">
$(function(){
	 $("#md5_input_string").keyup(function(){
    $.post("encryption/md5.php",{ input:$(this).val()},function(result)
    	{
    		$("#md5_string").val(result);
    	});
	});
	 $("#rot13_input_string").keyup(function(){
    $.post("encryption/rot13.php",{ input:$(this).val()},function(result)
    	{
    		$("#rot13_string").val(result);
    	});
	});
	 $("#sha1_input_string").keyup(function(){
    $.post("encryption/sha1.php",{ input:$(this).val()},function(result)
    	{
    		$("#sha1_string").val(result);
    	});
	});
	  $("#sha224_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'sha224'},function(result)
    	{
    		$("#sha224_string").val(result);
    	});
	});
	$("#sha256_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'sha256'},function(result)
    	{
    		$("#sha256_string").val(result);
    	});
	});
	 $("#sha384_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'sha384'},function(result)
    	{
    		$("#sha384_string").val(result);
    	});
	});
	$("#sha512_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'sha512'},function(result)
    	{
    		$("#sha512_string").val(result);
    	});
	});
	$("#ripemd128_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'ripemd128'},function(result)
    	{
    		$("#ripemd128_string").val(result);
    	});
	});
	$("#ripemd160_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'ripemd160'},function(result)
    	{
    		$("#ripemd160_string").val(result);
    	});
	});
	$("#ripemd256_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'ripemd256'},function(result)
    	{
    		$("#ripemd256_string").val(result);
    	});
	});
	$("#ripemd320_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'ripemd320'},function(result)
    	{
    		$("#ripemd320_string").val(result);
    	});
	});
	});
 

	</script>
	<style type="text/css">
.w3-sidenav a{ font-size:0.8em;}
	</style>
	<div style="width:100%">
	<header class="w3-container teal">
  	<h1>String Fun</h1>
  	<h2> Have fun with strings </h2>
	</header>
</div>
<div>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Menu</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="encryption.php">Encryption</a></li>
        <li><a href="#">Suggestions</a></li> 
        <li><a href="#">About Us</a></li> 
      </ul>
    </div>
  </div>
</nav>
</div>
<div style="top:10%; position:relative">
	<nav class="w3-sidenav white w3-card-2" style="width:20%; margin-top:13%;">
	 <a href="#sha1" id="sha1_link">SHA 1</a>
	  <a href="#sha224" id="sha224_link">SHA 224</a>
	  <a href="#sha256" id="sha256_link">SHA 256</a>
	  <a href="#sha384" id="sha384_link">SHA 384</a>
	  <a href="#sha512" id="sha512_link">SHA 512</a>
	  <a href="#ripemd128" id="ripemd128_link">RIPEMD 128</a>
	  <a href="#ripemd160" id="ripemd160_link">RIPEMD 160</a>
	  <a href="#ripemd256" id="ripemd256_link">RIPEMD 256</a>
	  <a href="#ripemd320" id="ripemd320_link">RIPEMD 320</a>	
	  <a href="#md5" id="md5_link">MD5</a>		
	  <a href="#rot13" id="rot13_link">ROT13</a>		
	  	
	</nav>
</div>
	<div id="sha1" style="margin-left:25%" class="tab">
		<h2> SHA1 hash of a string </h2><br>
		Input String <br/>
		<textarea id="sha1_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		SHA1 hash of string<br>
		<textarea id="sha1_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="sha224" style="margin-left:25%" class="tab">
		<h2> SHA224 hash of a string </h2><br>
		Input String <br/>
		<textarea id="sha224_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		SHA1 hash of string<br>
		<textarea id="sha224_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="sha256" style="margin-left:25%" class="tab">
		<h2> SHA256 hash of a string </h2><br>
		Input String <br/>
		<textarea id="sha256_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		SHA1 hash of string<br>
		<textarea id="sha256_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="sha384" style="margin-left:25%" class="tab">
		<h2> SHA384 hash of a string </h2><br>
		Input String <br/>
		<textarea id="sha384_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		SHA1 hash of string<br>
		<textarea id="sha384_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>
	
	<div id="sha512" style="margin-left:25%" class="tab">
		<h2> SHA512 hash of a string </h2><br>
		Input String <br/>
		<textarea id="sha512_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		SHA1 hash of string<br>
		<textarea id="sha512_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<!-- RIPEMD ALGO -->
	<div id="ripemd128" style="margin-left:25%" class="tab">
		<h2> RIPEMD 128 hash of a string </h2><br>
		Input String <br/>
		<textarea id="ripemd128_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		RIPEMD 128 hash of string<br>
		<textarea id="ripemd128_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="ripemd160" style="margin-left:25%" class="tab">
		<h2> RIPEMD 160 hash of a string </h2><br>
		Input String <br/>
		<textarea id="ripemd160_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		RIPEMD 160 hash of string<br>
		<textarea id="ripemd160_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="ripemd256" style="margin-left:25%" class="tab">
		<h2> RIPEMD 256 hash of a string </h2><br>
		Input String <br/>
		<textarea id="ripemd256_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		RIPEMD 256 hash of string<br>
		<textarea id="ripemd256_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>


	<div id="ripemd320" style="margin-left:25%" class="tab">
		<h2> RIPEMD 320 hash of a string </h2><br>
		Input String <br/>
		<textarea id="ripemd320_input_string" class="input-field" rows="3" cols="80"></textarea><br>
		RIPEMD 320 hash of string<br>
		<textarea id="ripemd320_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<!-- MD ALGO -->
	<div id="md5" style="margin-left:25%" class="tab">
		<h2> MD5 hash of a string </h2><br>
		Input String <br/>
		<textarea  id="md5_input_string" rows="3" cols="80" class="input-field"></textarea>
			<br>MD5 hash<br>
		<textarea id="md5_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	<div id="rot13" style="margin-left:25%" class="tab">
		<h2> ROT13 encoding of string </h2><br>
		Input String <br/>
		<textarea  id="rot13_input_string" class="input-field" rows="3" cols="80"></textarea>
			<br>ROT13 encoded string<br>
		<textarea id="rot13_string" class="output-field" rows="3" cols="80" readonly></textarea>
	</div>

	
	



</body>	
</html>