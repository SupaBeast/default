// Nicer margins for content images based on their position
$(".textpage img").each(function() { 
  if ( $(this).css("float") == "left" ) {
    $(this).css("margin-left", "0px");
  } else if ( $(this).css("float") == "right" ) { 
    $(this).css("margin-right", 0);
  }
});

// Hide search input text on click
$.fn.placeholder = function() {
    return $(this).each(function(){
        var value = $(this).val();
        var input = $(this).prev();
        input
        .focus(function() {
            if ($(this).val() == value) {
                $(this).val('');
            }
        })
        .blur(function() {
            if($(this).val() == '') {
                $(this).val(value);
            }
        })
        .closest('form').submit(function() {
            if (input.val() == value) {
                input.val('');
            }
        });
        if(input.val() == '') {
            input.val(value);
        }
    })
}
$("input.placeholder").placeholder();

// IE Safari detect ( for button fixes )
(function($) {
 var userAgent = navigator.userAgent.toString().toLowerCase();
 if ((userAgent.indexOf('safari') != -1) && !(userAgent.indexOf('chrome') != -1) && (navigator.platform=="Win32" || navigator.platform=="Win64")) {
  $("body").addClass("safari");
 }
})(jQuery); 

// Test menu .active class
(function($) {
  function makeMenuWork(clickableSelector) { 
    var root = $(clickableSelector.split(" ")[0]);
    var items = $(clickableSelector);
    items.click(function() {
      $(".active", root).removeClass("active");
      $(this).addClass("active");
    });
  }
  //makeMenuWork(".catlist .item");
})(jQuery); 

// Disable empty links
$("a").each(function() {
  if (!$(this).attr('href')) {
    $(this).click(function() {
      return false;
    });
  }
});

/**
 * Get url property
 * @param string name parameter name to get from url
 */
function gup( name ) {
    name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
    var regexS = "[\\?&]"+name+"=([^&#]*)";
    var regex = new RegExp( regexS );
    var results = regex.exec( window.location.href );
    if( results == null )
        return "";
    else
        return results[1];
}

// change to print.css when ?print=1 in url
(function($) {
    if (gup('print')=='1') {
        $('link[media=print]').attr('media', 'all')
    }
// language change
})(jQuery);
$(function(){
    $(".lang-menu").uniform();
    $('select').live({
      'change': function() {
        var selected = $(this).find("option:selected");
        var url = selected.val();
        try {pageTracker._link('/changelanguage/'+url)} catch(err) {document.location.href = '/changelanguage/'+url};
      }
    });
   });
// colorbox 
$(document).ready(function(){
  $(".red").colorbox({iframe:true, width:"312", height:"352"});
  $(".askit").colorbox({iframe:true, width:"900", height:"700"});
  $(".poster").colorbox({width:"600", height:"860", overlayClose: false});
  $(".fortumo-pay").colorbox({
      iframe:true,
      width:"595",
      height:"300",
      open: true,
      fastIframe: true,
      onLoad: function(e) {
        $("#colorbox").attr('class', '').addClass("fortumo");
        $('#colorbox').css({
            'padding-right': '0',
            'padding-bottom': '0',
         });
      },
      onClosed: function(e) {
        $("#colorbox").attr('class', '');
          $('#colorbox').css({
            'padding-right': '50px',
            'padding-bottom': '50px',
         });
      }
    });
});

//hand slide javascript
(function($) {
    
    $.slider = function() {
        var fadeElements = function($elem, $objects, settings, current) {
            
            var next = (current == $objects.length - 1) ? 0 : current + 1;

            $curobj = $objects.eq(current);
            var width = $curobj.width();
            
            $nextobj = $objects.eq(next);
            var $tip = $('.hand-tip');
            
            $curobj.animate({'left': "-=" + width + "px"}, settings.speed, function(){
                $curobj.animate({'left': "+=" + width * 2 + "px"}, 0);
            });
            
            $nextobj.animate({'left': "-=" + width + "px"}, settings.speed);
            
            $tip.find('.tip-text').eq(current).fadeOut(settings.speed, function(){
                //$tip.find('#hand-tip-text-hldr').html($nextobj.attr('title'));
                $tip.find('.tip-text').eq(next).fadeIn(settings.speed);
            });
                                    
            var timeOut = setTimeout(function(){
                fadeElements($elem, $objects, settings, next);
            }, settings.pause);
        };
        
        return {
            initFade: function($elem, settings) {
                var $objects = $elem.find('div');
                var objects_length = $objects.length;               
                if(objects_length > 1) {
                    for(var i = 1; i < objects_length; i++) {
                        var width = $objects.eq(i).width();
                        $objects.eq(i).animate({'left': "+=" + width + "px"}, 0);
                        // $objects.eq(i).hide();
                        $objects.each(function(i, el) {
                          $('.hand-tip').append('<div class="tip-text">'+'<a href="features.html">'+$(el).attr('title')+'</a>'+'</div>');
                        });
                        $('.tip-text').eq(0).show();
                    }
                    var timeOut = setTimeout(function(){
                        fadeElements($elem, $objects, settings, 0);
                    }, settings.pause);
                }
            }
        };
    }();
    
    $.fn.extend({
        slider: function() {
            
            var settings = {
                pause: 9000,
                speed: 500
            };

            $.slider.initFade($(this), settings);
        }
    });
    
})(jQuery);

$(window).load(function() {
    if($('#big-picture-slider').length > 0) {
        $('#big-picture-slider').slider();
    }
    $(document.body).addClass('loaded');
});
//blank target
$(function() {
    $('.social a,.blog[href^=http]').click( function() {
        window.open(this.href);
        return false;
    });
});

//menu toggle
$('.account').mouseover(function() {
  $('.menu').slideDown('fast', function() {
  });
});
$('#header').mouseleave(function() {
  $('.menu').slideUp('fast', function() {
  });
});

//qtip

$(document).ready(function() 
{
   // Match all link elements with href attributes within the content div
   $('.qtip').qtip(
   {
      content: "When there is no data connection available, Fortumo's in-app purchasing SDK automatically falls back to SMS messages only to make a payment.  As much as 27% of all purchases on Android are attempted in situations when there is no data connection present.",
      position: {
        adjust: { 
          x: 20, 
          y: -140 
        }
      },
      style: { 
          width: 350
      }
   });
});

//api popup input toggle
$('.toggle').click(function() {
  $('.hidden').slideDown('fast', function() {
  });
});
$('#header').mouseleave(function() {
  $('.hidden').slideUp('fast', function() {
  });
});
