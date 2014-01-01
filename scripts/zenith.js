   $(function(){     
         $('#slideshow').cycle({
            timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
            fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
            pager:   '#pager',  // selector for element to use as pager container
            pause:   0,	  // true to enable "pause on hover"
            pauseOnPagerHover: 0 // true to pause when hovering over pager link
        });
     });


    //    zenAccord plugin
    (function($){
        $.fn.zenAccord = function(options){
          //extending default settings  
          var settings = $.extend({
                header:"h3",
                detail:"div",
                animation:"slide",
                animationProcess:"slow",
                delay:1000,
                ishide:true
          },options);
          
          var header = this.find(settings.header);
          header.css({
            "cursor":"pointer"
          });
          header.addClass("arrow-right");
          if(settings.ishide == true){
            header.each(function(){
                $(this).next().hide();
            });
          }
          header.click(function(){
                var detail = $(this).next(settings.detail);
                if(detail.is(":visible")){
                    detail.slideUp("slow");
                    $(this).addClass("arrow-right").removeClass("arrow-down");
                   } 
                else{ 
                detail.slideDown("slow");
                $(this).addClass("arrow-down").removeClass("arrow-right");
                }
          });
          
          return this;
        };
    }(jQuery));
    
    
    $(document).ready(function(){
            $(".zaccordian").zenAccord();
      });      