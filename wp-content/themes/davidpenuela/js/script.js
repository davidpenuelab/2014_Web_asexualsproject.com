$j = jQuery;
$j(document).ready(function(){    
    $j(".homeVimeo").fitVids();
	loadAll();

    $j('.content').scrollspy();
    updateResize();
    $j(window).resize(function(){
        updateResize();
    });
    setupScrollTo();
    
	$j('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		},
		padding: 0
	});
	$j('.fancybox-iframe').fancybox({
		padding: 0
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
}