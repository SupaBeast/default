$(document).ready(function(){
  //colorbox custom close
  $("#close").click(function() {
      parent.$.colorbox.close();
  });
  
  //uniform
  $("input:checkbox, input:radio, select").uniform();   
  
  // add class selected for labels when click  
  $('.list label').click(function() {
    if($(this).hasClass('selected')) {
      return false
    }
    else { 
      $('.list label').removeClass('selected');
      $(this).addClass('selected');
    }
  });
  
  //country change
  $(".countryChange").click(function() {
    $(".countryChange").fadeOut(function(){
      $(".countrySelect").removeClass("hidden");
      $(".countrySelect").fadeIn();
    });
  });
  $(".countrySelect select").change(function() {
    $(".countrySelect").fadeOut(function(){
      $(".countryChange").removeClass("hidden");
      $(".countryChange").fadeIn();
    });
  });
  
  //help toggle
  $("#help").click(function() {
      if ($('#helpContent').hasClass("hidden")) {
        $('#mainInner').fadeOut(function(){
          $('#mainInner').addClass('hidden');
          $('#helpContent').fadeIn().removeClass('hidden');
        });
      }
      else {
        $('#helpContent').fadeOut(function(){
          $('#helpContent').addClass('hidden');
          $('#mainInner').fadeIn().removeClass('hidden');
        });
      }
  });
  //loader-toggle
  $(".toggle").click(function() {
      $('.loader').fadeIn("fast").removeClass("hidden");
  });
  
  //href redirect and timeout *this is only for front-end*
  $(".widget_2").click(function(href) {
      setTimeout(function(){
        window.location.href = "widget_2.html";
      },3000);
  });
  $(".widget_3").click(function(href) {
      setTimeout(function(){
        window.location.href = "widget_3.html";
      },3000);
  });
  $(".widget_4").click(function(href) {
      setTimeout(function(){
        window.location.href = "widget_5.html";
      },3000);
  });
  $(document).ready(function(){
    if( $('.smsWaiting').is(':visible') ) {
      setTimeout(function(){
        window.location.href = "widget_4.html";
      },5000);
    }
  });
  
  //colorbox dynamic resize
  function getHeight() {
    var height = $("#main").height();
    height = height+70; // extra padding
    height = Math.max(height, 380); // min-height
    height = Math.min(height, 700); // max-height
    return height;
  }
  
  function resize(height) {
    parent.$.colorbox.resize({height: height});
  }
  resize(getHeight());
  
});
  //swap images in operators
  function swapImages(){
    if ( $(".operators img").length != 3 ) {
      var $active_images = $('.operators .active');
      var $next1 = ($('.operators .active:last').next().length > 0) ? $('.operators .active:last').next() : $('.operators img:first');
      var $next2 = ($next1.next().length > 0) ? $next1.next() : $('.operators img:first');
      var $next3 = ($next2.next().length > 0) ? $next2.next() : $('.operators img:first');
      $active_images.fadeOut(function(){
        $active_images.removeClass('active');
        $next1.add($next2).add($next3).fadeIn().addClass('active');
      });
    }
    else {
      return false;
    }
  }
  //interval for swaping img
  $(document).ready(function(){
    setInterval('swapImages()', 5000);
  });