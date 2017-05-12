<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
	
</head>
<body>
<div class="p1" id="p1"></div>
<div class="menu">
<a href="#p1">1</a>
<a href="#p2">2</a>
<a href="#p3">3</a>
<a href="#p4">4</a>
<a href="#p5">5</a>


</div>
<div class="fake"></div>
<div class="p2" id="p2"></div>
<div class="p3" id="p3"></div>
<div class="p4" id="p4"></div>
<div class="p5" id="p5">
	
	<div class="strelka"></div>
</div>

</body>
<script type="text/javascript">
	$('.p1').addClass('visible animated fadeIn');
    var winH = $(window).height();
    winH = parseInt(winH) / 2;
    
    $(window).scroll(function() {
       var curent = $(this).scrollTop();
      

      var p2 = $('.p2').offset().top;
      if(curent >= p2-parseInt(winH)) {
      	$('.p2').addClass('visible animated fadeIn');
      }



       var p3 = $('.p3').offset().top;
      if(curent >= p3-parseInt(winH)) {
      	$('.p3').addClass('visible animated bounceIn');
      }


       var p4 = $('.p4').offset().top;
      if(curent >= p4-parseInt(winH)) {
      	$('.p4').addClass('visible animated fadeInRight');
      }


       var p5 = $('.p5').offset().top;
      if(curent >= p5-parseInt(winH)) {
      	$('.p5').addClass('visible animated fadeILeft');
      }

      var position = $('.fake').offset().top;
     if(curent >= position){
     	$('.menu').addClass('menuStop');
     }else if(curent < position){
     	$('.menu').removeClass('menuStop');

     }
     

     var strelka = $('.strelka').offset().top;

     
     
     function Up(){

		if(strelka <= curent+500){
     	$('.strelka').addClass('visible animated fadeIn');
     	$('.strelka').css({'visibility':'visible'});
     	}else{

     		$('.strelka').css({'visibility':'hidden'});
     	}

     }
     setTimeout(Up, 1000);
    });

    $('.strelka').on('click', function(){

    	$('body').animate({scrollTop:$('.p1').position().top},700);

    });


    $('.menu').on('click','a', function(event){
    	event.preventDefault();

    	var id = $(this).attr('href');
    	var top = $(id).offset().top;
    	console.log(id,top);
    	$('body').animate({scrollTop: top},1500);

    });
</script>
</html>


