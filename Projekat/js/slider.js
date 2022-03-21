 $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(5000)
    .next()
    .fadeIn(5000)
    .end()
    .appendTo('#slideshow');
},  6000);