$(function(){

		$("#reverse").show();
        $("#shuffle").hide();
        $("#count").hide();
        $("#cap").hide();
        $("#decap").hide();
        $("#count_result").html('');
     $(".w3-sidenav li").click(function(){
        $(".w3-sidenav li").removeClass("active");
        $(this).addClass("active");

    });       
    $("#reverse_link").click(function(){
        $("#reverse").show();
        $("#shuffle").hide();
        $("#count").hide();
        $("#cap").hide();
        $("#decap").hide();
        $(".input-field ,.output-field").val('');
        $("#count_result").html('');
    });
    $("#shuffle_link").click(function(){
        $("#reverse").hide();
        $("#shuffle").show();
        $("#count").hide();
        $("#cap").hide();
        $("#decap").hide();
        $(".input-field ,.output-field").val('');
        $("#count_result").html('');
    });
     $("#count_link").click(function(){
        $("#reverse").hide();
        $("#shuffle").hide();
        $("#count").show();
        $("#cap").hide();
        $("#decap").hide();
        $(".input-field ,.output-field").val('');
        $("#count_result").html('');
    });
      $("#cap_link").click(function(){
        $("#reverse").hide();
        $("#shuffle").hide();
        $("#count").hide();
        $("#cap").show();
        $("#decap").hide();
        $(".input-field ,.output-field").val('');
        $("#count_result").html('');
    });
       $("#decap_link").click(function(){
        $("#reverse").hide();
        $("#shuffle").hide();
        $("#count").hide();
        $("#cap").hide();
        $("#decap").show();
        $(".input-field ,.output-field").val('');
        $("#count_result").html('');
    });
     
});

		