$j = jQuery;
$j(document).ready(function(){    
    
    //setup fidvid
    $j(".homeVimeo").fitVids();
	
	//fadein of the elements
	//loadAll();
	
	//setup FancyBox
	setupFancyBox();    
    
	//resize part    
    
    $j(window).resize(function(){
        updateResize();
    });
    setupScrollTo();

	//carousel
    $j('#asex_news_carousel').carousel({
		interval: false
  	});
    

	//extra
	$j('body').on('activate.bs.scrollspy', function () {
		// do something?
/* 		console.log("hello"); */
		
  	});
  	
  	$j(document).keypress(function( event ) {
  		switch (event.which){
	  		//black
	  		case 98:
	  		case 66:
	  			$j('.about').css('background','black');
	  			$j('.about p').css('color','white');
	  			$j('.about h1').css('color','white');
	  		break;
	  		//white
	  		case 119:	  		
	  		case 87:
	  			$j('.about').css('background','white');
	  			$j('.about p').css('color','black');
	  			$j('.about h1').css('color','black');
	  		break;
	  		//purple
	  		case 112:
	  		case 80:
	  			$j('.about').css('background','rgb(100,10,134)');
	  			$j('.about p').css('color','white');
	  			$j('.about h1').css('color','white');	  			
	  		break;

	  		default:
	  		break;
  		} 

	});
  	
  	addAnalytics();
  	setTimeout(function(){updateResize();},1000);	

 });

function updateResize(){
	var h = $j('.descriptionIam').height();
	var desc_centerH = $j('.descriptionIam .desc_centerIam').height();
	var paddingTop = h/2-desc_centerH/2;
	$j('.descriptionIam').css('margin-top',paddingTop+'px');
	
}

function setupFancyBox(){
	$j('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		width		: '100%',
		helpers : {
			media : {}
		},
		padding: 0
	});
	$j('.fancybox-iframe').fancybox({
		fitToView	: false,
		width		: '100%',
		height		: 'auto',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
	
	});
}
function setupScrollTo(){
// navigation click actions	
	$j('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $j(this).attr("data-id");
		scrollToID('#' + sectionID, 750);
		$j('.scroll-link').parent().removeClass('active');
		$j(this).parent().addClass('active');
	});
	// scroll to top action
	$j('.scroll-top').on('click', function(event) {
		event.preventDefault();
		$j('html, body').animate({scrollTop:0}, 'slow'); 		
	});
	// mobile nav toggle
	$j('#nav-toggle').on('click', function (event) {
		event.preventDefault();
		$('#main-nav').toggleClass("open");
	});

}

// scroll function
function scrollToID(id, speed){
	var offSet = 50;
	var targetOffset = $j(id).offset().top - offSet;
	var mainNav = $j('#main-nav');
	$j('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}

function loadAll(){
	setTimeout(function(){$j('#load3').fadeIn(1000)},1000);	
	setTimeout(function(){$j('#load4').fadeIn(1000)},1000);	
	setTimeout(function(){$j('#load5').fadeIn(1000)},1000);
	setTimeout(function(){$j('#load6').fadeIn(1000)},1000);	
	setTimeout(function(){$j('#load7').fadeIn(1000)},1000);		
	setTimeout(function(){$j('#load8').fadeIn(1000)},1000);		
	setTimeout(function(){$j('#load9').fadeIn(1000)},1000);		
	setTimeout(function(){$j('#load10').fadeIn(1000)},1000);		
}

function addAnalytics(){
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-49027937-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  }