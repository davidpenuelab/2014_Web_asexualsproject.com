$j = jQuery;
$j(document).ready(function(){    
    $j(".homeVimeo").fitVids();
	loadAll();

    $j('.content').scrollspy({ target: '#spyme' });
    updateResize();
    $j(window).resize(function(){
        updateResize();
    });
    setupScrollTo();
    $j('#asex_news_carousel').carousel({
		interval: false
  	});
    
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
	
	$j('.content').on('activate.bs.scrollspy', function () {
		// do something?
		console.log("hello");
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
  	
  	
});

function updateResize(){
/*     hideTitlePage(); */
}

function hideTitlePage(){
    if($j(window).width()>740){
        $j('.navbar-brand').hide();
    }else{
        $j('.navbar-brand').fadeIn();
    }
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
	$j('#load2').fadeIn(200); // video first
	setTimeout(function(){$j('#load1').fadeIn(1000)},2500);
	setTimeout(function(){$j('#load3').fadeIn(1000)},3000);	
	setTimeout(function(){$j('#load4').fadeIn(1000)},3000);	
	setTimeout(function(){$j('#load5').fadeIn(1000)},3000);
	setTimeout(function(){$j('#load6').fadeIn(1000)},3000);	
	setTimeout(function(){$j('#load7').fadeIn(1000)},3000);		
	setTimeout(function(){$j('#load8').fadeIn(1000)},3000);		
	setTimeout(function(){$j('#load9').fadeIn(1000)},3000);		
	setTimeout(function(){$j('#load10').fadeIn(1000)},3000);		
}