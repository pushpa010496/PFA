// JavaScript Document
// search
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
// ** scroll to top //
	jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});

// scroll to top ** //

		 
// *** header animation homepage //
		// function init() {
  //       window.addEventListener('scroll', function(e){
  //           var distanceY = window.pageYOffset || document.documentElement.scrollTop,
  //               shrinkOn = 120,
  //               header = document.querySelector("header");
  //           if (distanceY > shrinkOn) {
  //               classie.add(header,"smaller");
  //           } else {
  //               if (classie.has(header,"smaller")) {
  //                   classie.remove(header,"smaller");
  //               }
  //           }
  //       });
  //   }
  //   window.onload = init();
// header animation homepage *** //
	
	
// slider
$('#carouselHacked').carousel();
$("#eBookAccess").click(function(){
    $("#eBookPanel").slideToggle('slow');
});
// slider //


    /*$(function() {
      $('body').peelback({
        adImage  : 'images/peel-ad.png',
        peelImage  : 'images/peel-image.png',
        clickURL : 'http://www.thebestdinosaur.com/',
        smallSize: 100,
        bigSize: 300,
        gaTrack  : true,
        gaLabel  : '#1 Stegosaurus',
        autoAnimate: true
      });
    });*/

//Quick Contact form on home page slider
 $("#QuickFormBtn").click(function() {
	 $(this).animate({right: '-700px'})
	$(".PF-formBG").animate({right: '0px'})
        });
		
	$("#FormClose").click(function() {
	$("#QuickFormBtn").animate({right: '0px'})
	$(".PF-formBG").animate({right: '-700px'})
});




$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
});


//navbar toggle on hover in desktop and clickable in mobile and TAB resolutions
$(document).ready(function() {
if ($(window).width() > 1200) 
	{
		$(document).find(".dropdown-toggle").addClass("disabled")
	}else{
		$(document).find(".dropdown-toggle .disabled").removeClass("disabled")
		}
});
