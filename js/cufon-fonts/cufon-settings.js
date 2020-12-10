function initCufon() {
	Cufon.replace('h1,h2,h3,h4,h5,h6', { fontFamily: 'molengo.cufonfonts.js',hover: true });
	Cufon.replace('#main_navigation a', { fontFamily: 'molengo.cufonfonts.js',hover: true ,textShadow: '0px 1px #111'});
	Cufon.replace('.inner-page-intro h4', { fontFamily: 'molengo.cufonfonts.js',hover: true ,textShadow: '0px 1px #0573b4'});
	
}

(function($) {
        $(function() {

$(document).ready(function(){
	initCufon();
});

		
          });
    })(jQuery);     
