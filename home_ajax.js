$(function(){
	 $("#rev_input_string").keyup(function(){
    $.post("reverse.php",{ input:$(this).val()},function(result)
    	{
    		$("#reverse_string").val(result);
    	});
	});
	 $("#sfl_input_string").keyup(function(){
    $.post("shuffle.php",{ input:$(this).val()},function(result)
    	{
    		$("#sfl_string").val(result);
    	});
	});
	 $("#count_input_string").keyup(function(){
    $.post("count.php",{ input:$(this).val()},function(result)
    	{
    		$("#count_result").html(result);
    	});
	});
	 $("#cap_input_string").keyup(function(){
    $.post("cap.php",{ input:$(this).val()},function(result)
    	{
    		$("#cap_string").val(result);
    	});
	});
	  $("#decap_input_string").keyup(function(){
    $.post("decap.php",{ input:$(this).val()},function(result)
    	{
    		$("#decap_string").val(result);
    	});
	});
	});