$j = jQuery;
$j(document).ready(function(){    
    $j('body').scrollspy({ target: '#mainMenu' });
    $j("#homeVimeo").fitVids();
    updateResize();
    $j(window).resize(function(){
        updateResize();
    });
    setupScrollTo();
});

function updateResize(){
    hideTitlePage();
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
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}