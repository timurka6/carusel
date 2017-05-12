


$.fn.caruselka = function(options) {


      var settings = $.extend({
                        autoplay : true,
                        interval : 1300
                     },options);
      var active = 1;
 
      var elements = this.find('.img-item');
      var lastImg = elements.length, i = 0;
      var that = this;
      var animate;
      var b;
      var el = (that.width() / 3) - 33.3;

      for (i = 0; i <= lastImg; i++) {
      	$('.img-item:nth-child('+i+')').attr('data-sort', i);
      }
      

      function Del(interval){
        setTimeout(function (){
         that.find('.deactive').remove();   
        }, interval);
      }
      
      var clas = that.attr('class');
      console.log(clas);
      var pl = false;

      $('div').hover(
        function() {
        if($(this).hasClass('carusel')) {
          pl = true;
          animate.stop();
          clearInterval(b);
        }
      });
      

      if(settings.autoplay == true && pl == false){
	      	b = setInterval(function(){

              if(active == lastImg){

                      var clone =  $('.img-item[data-sort='+active+']').clone();
                      clone = clone.css({'margin':'0px 2px 0px 2px','display':'inline-block'});


                      animate = $('.img-item[data-sort='+active+']').animate({'margin-left':'-'+el+'px'},settings.interval - 100).addClass('deactive');
      

                      that.append(clone);
                       console.log(active);
                      active = 0;
                      Del(settings.interval - 100);
              }

              if(active < lastImg){
                
              
                      var clone =  $('.img-item[data-sort='+active+']').clone();
                      
                      clone = clone.css({'margin':'0px 2px 0px 2px','display':'inline-block'});
                    
                      Del(settings.interval - 100);
                      animate = $('.img-item[data-sort='+active+']').animate({'margin-left':'-'+el+'px'},settings.interval - 100).addClass('deactive');
                      

                      that.append(clone);
                       console.log(active);
                      active = active+1;
                       
            }

      /*$('.carusel').mouseover(function(){

        animate.stop();
      });*/
      /*$('.img-item').hover(function(){
          //settings.interval = 0;
          animate.stop();
          //clone.detach();

        
      
       clearInterval(b);
      //
      });*/
	      	}, settings.interval);
      }
}