$(function(){
	 
	 $("#rot13_input_string").keyup(function(){
    $.post("encryption/rot13.php",{ input:$(this).val()},function(result)
    	{
    		$("#rot13_string").val(result);
    	});
	});
     $("#sha1_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'sha1'},function(result)
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
    $("#md2_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'md2'},function(result)
        {
            $("#md2_string").val(result);
        });
    });
    $("#md4_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'md4'},function(result)
        {
            $("#md4_string").val(result);
        });
    });
    $("#md5_input_string").keyup(function(){
    $.post("encryption/enc.php",{ input:$(this).val(),algo:'md5'},function(result)
        {
            $("#md5_string").val(result);
        });
    });

	});
 
