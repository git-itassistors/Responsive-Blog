function menuClick()
{
	$('#menu-drop-1').slideToggle(['slow']);
	$('.hidden-social-container').toggle('Hide');
	$('.news-holder').toggle('Hide');
	$('.ad-holder-1').toggle('Hide');
	$('.to-hide').toggle('Hide');
}

function meLoad() {
	
	
	  $(document).ready(function(e) {
		
		
		$(window).resize(function(e) {
		console.log("HELLO");
		if(  $('.hidden-nav-container').css('display') === 'none'   )
		{
			$('.menu-drop').css('display','none');
			$('.to-hide').show();
		}
		
		});
	
		
	});
	
	  var body = $('.gaside-rd-pl');
	  var backgrounds = ['url(offers-img/bg-1.jpg)', 'url(offers-img/bg-2.jpg)', 'url(offers-img/bg-3.jpg)'];
	  var current = 0;
	
	  function nextBackground() {
		  $('.gaside-rd-pl').css(
			   'background',
				backgrounds[current = ++current % backgrounds.length]
		   );
		   
		 
		
		 $('.gaside-rd-pl').css('background-size','100% 100%');
		 $('.gaside-rd-pl').css('background-repeat','no-repeat');
		 //$('body').css('transition','1s');
		 
		$('.gaside-rd-pl').css('-webkit-transition','all 2500ms cubic-bezier(1.000, -0.600, 0.000, 0.330)');
		$('.gaside-rd-pl').css('-webkit-transition-timing-function','cubic-bezier(.56,.35,0,-0.98)'); 

		 
		 setTimeout(nextBackground, 4500);
		 
		 
		 
		 
	 }
	 setTimeout(nextBackground, 4500);
	  
	   //$('body').css('transition','1s');
	   
	   $('.gaside-rd-pl').css('-webkit-transition','all 2500ms cubic-bezier(1.000, -0.600, 0.000, 0.330)');
	   $('.gaside-rd-pl').css('-webkit-transition-timing-function','cubic-bezier(.56,.35,0,-0.98)'); 


	   $('.gaside-rd-pl').css('background-size','100vw 100vw !important');
	   $('.gaside-rd-pl').css('background-repeat','no-repeat');
	   $('.gaside-rd-pl').css('background', backgrounds[0]);
	   
	   
	   
	   
		if(    $('.gaside-rd-pl').css('display').toLowerCase()    ===  'none'    )
		{
					
					
					  var body = $('.offer-redirect-pl');
					  var backgrounds = ['url(offers-img/alt-bg-1.png)', 'url(offers-img/alt-bg-2.jpg)', 'url(offers-img/alt-bg-3.png)'];
					  var current = 0;
					
					  function nextBackground() {
						  $('.offer-redirect-pl').css(
							   'background',
								backgrounds[current = ++current % backgrounds.length]
						   );
						   
						 
						
						 
						 $('.offer-redirect-pl').css('background-repeat','no-repeat');
						 //$('body').css('transition','1s');
						 
						$('.offer-redirect-pl').css('-webkit-transition','all 2500ms cubic-bezier(1.000, -0.600, 0.000, 0.330)');
						$('.offer-redirect-pl').css('-webkit-transition-timing-function','cubic-bezier(.56,.35,0,-0.98)'); 
				
						 
						 setTimeout(nextBackground, 4500);
						 
						 
						 
						 
					 }
					 setTimeout(nextBackground, 4500);
					  
					   //$('body').css('transition','1s');
					   
					   $('.offer-redirect-pl').css('-webkit-transition','all 2500ms cubic-bezier(1.000, -0.600, 0.000, 0.330)');
					   $('.offer-redirect-pl').css('-webkit-transition-timing-function','cubic-bezier(.56,.35,0,-0.98)'); 
				
				
					   
					   $('.offer-redirect-pl').css('background-repeat','no-repeat');
					   $('.offer-redirect-pl').css('background', backgrounds[0]);
					
		}
		
			
		 var body = $('.hidden-aside');
					  var backgrounds = ['url(offers-img/alt-bg-1.png)', 'url(offers-img/alt-bg-2.jpg)', 'url(offers-img/alt-bg-3.png)'];
					  var current = 0;
					
					  function nextBackground() {
						  $('.hidden-aside').css(
							   'background',
								backgrounds[current = ++current % backgrounds.length]
						   );
						   
						 
						
						 
						 $('.hidden-aside').css('background-repeat','no-repeat');
						 //$('body').css('transition','1s');
						  $('.hidden-aside').css('background-size','10% 100%');
						$('.hidden-aside').css('-webkit-transition','all 2500ms cubic-bezier(1.000, -0.600, 0.000, 0.330)');
						$('.hidden-aside').css('-webkit-transition-timing-function','cubic-bezier(.56,.35,0,-0.98)'); 
				
						 
						 setTimeout(nextBackground, 4500);
						 
						 
						 
						 
					 }
					 setTimeout(nextBackground, 4500);
					  
					   //$('body').css('transition','1s');
					    $('.hidden-aside').css('background-size','10% 100%');
					   $('.hidden-aside').css('-webkit-transition','all 2500ms cubic-bezier(1.000, -0.600, 0.000, 0.330)');
					   $('.hidden-aside').css('-webkit-transition-timing-function','cubic-bezier(.56,.35,0,-0.98)'); 
				
				
					   
					   $('.hidden-aside').css('background-repeat','no-repeat');
					   $('.hidden-aside').css('background', backgrounds[0]);
	   
	   
	   
 };
 
 function newClk(x)
{
	$('.hrr').toggle();
	$('.alt-review-frame').toggle('slow');
}
 

 
/* $(window).scroll(function(e) {
    
	var a = $('.g-scroll').offset().top;
	var b = $(window).scrollTop();
	
	if(  b  >=  a)
	{
		$('.aside-content-holder').delay('2000');
		$('.aside-content-holder').css('position','fixed');
	}
	else
	{
		$('.aside-content-holder').css('position','static');
	}
	
}); */

