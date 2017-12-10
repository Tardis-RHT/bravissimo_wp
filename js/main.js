//for hamburger menu

$('#button_menu').click(function(){
    $('.header_menu').slideToggle();
    $('.span_hamburger').toggleClass('active');
})

//for diminishing header when scrolling
$(window).scroll(function(){
    $('.header_wrapper-1').toggleClass('scroll', $(this).scrollTop() > 0);
});
 
//for correct scroll to anchor links

var scroll = function(){
  var dest = window.location.hash;
  $('html, body').animate({
      scrollTop: $(dest).position().top - $('.header_menu-wrapper').height() - 5  
      }, 800, 'swing');
}
if (window.location.hash) {
  scroll();
  window.addEventListener('hashchange', function(e) {
    scroll();
  });
}

// SCRIPT FOR MODAL WINDOW
$(document).ready(function() {
  $('.popup').click( function(event){
    event.preventDefault();
    $('#overlay').fadeIn(400,
      function(){
        $('#modal_form') 
          .css('display', 'block')
          .animate({opacity: 1, top: '50%'}, 200);
    });
      $('.thankyou').addClass('modal_hidden');
  });
  $('#modal_close, .thankyou_close, #overlay, .thankyou_btn').click( function hideModal(){
    $('#modal_form')
      .animate({opacity: 0, top: '45%'}, 200,
        function(){
          $(this).css('display', 'none');
          $('#overlay').fadeOut(200);
        }
      );
  });
});

//old way to show thankyou
// $('.button_submit').click(function(){
//   $('.thankyou').removeClass('modal_hidden');
// });

//new way to show thankyou
var wpcf7Elm = document.querySelector( '#modal_form > .wpcf7' );
wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
   $('.thankyou').removeClass('modal_hidden');
}, false );
// END OF SCRIPT FOR MODAL WINDOW
// 