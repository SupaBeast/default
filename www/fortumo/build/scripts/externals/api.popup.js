
//input toggle function
$('.toggle').click(function() {
  parent.$.colorbox.resize({width:"900", height:"800"});
  $('.hidden').slideDown('fast', function() {
  });
});
$('.toggle-close').click(function() {
  parent.$.colorbox.resize({width:"900", height:"700"});
  $('.hidden').slideUp('fast', function() {
  });
});