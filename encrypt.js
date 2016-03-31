$(function(){
        $(".tab").hide();
		$("#rot13").show();
    $(".w3-sidenav li").click(function(){
        $(".w3-sidenav li").removeClass("active");
        $(this).addClass("active");

    });   
    $("#md5_link").click(function(){
        $(".tab").hide();
        $("#md5").show();
        $(".input-field ,.output-field").val('');
    });
    $("#md2_link").click(function(){
        $(".tab").hide();
        $("#md2").show();
        $(".input-field ,.output-field").val('');
    });
    $("#md4_link").click(function(){
        $(".tab").hide();
        $("#md4").show();
        $(".input-field ,.output-field").val('');
    });
     $("#rot13_link").click(function(){
        $(".tab").hide();
        $("#rot13").show();
        $(".input-field ,.output-field").val('');
    });
      $("#sha1_link").click(function(){
        $(".tab").hide();
        $("#sha1").show();
        $(".input-field ,.output-field").val('');
    });
      $("#sha224_link").click(function(){
        $(".tab").hide();
        $("#sha224").show();
        $(".input-field ,.output-field").val('');
    });
       $("#sha256_link").click(function(){
        $(".tab").hide();
        $("#sha256").show();
        $(".input-field ,.output-field").val('');
    });
        $("#sha384_link").click(function(){
        $(".tab").hide();
        $("#sha384").show();
        $(".input-field ,.output-field").val('');
    });
         $("#sha512_link").click(function(){
        $(".tab").hide();
        $("#sha512").show();
        $(".input-field ,.output-field").val('');
    });
         $("#ripemd128_link").click(function(){
        $(".tab").hide();
        $("#ripemd128").show();
        $(".input-field ,.output-field").val('');
    });
         $("#ripemd160_link").click(function(){
        $(".tab").hide();
        $("#ripemd160").show();
        $(".input-field ,.output-field").val('');
    });
         $("#ripemd256_link").click(function(){
        $(".tab").hide();
        $("#ripemd256").show();
        $(".input-field ,.output-field").val('');
    });
         $("#ripemd320_link").click(function(){
        $(".tab").hide();
        $("#ripemd320").show();
        $(".input-field ,.output-field").val('');
    });

     
});

		