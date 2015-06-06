$('.menu_top') .click(function(){

var href = $(this) .attr('href');
$('#content_area') .load(href);
return false;
})


