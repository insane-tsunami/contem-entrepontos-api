


  



 jQuery.noConflict()(function($){
  $(document).ready(function(){
  
  
  
  
  initAccordion();
  
function initAccordion() {
	jQuery('.accordion-item').each(function(i) {
		var item=jQuery(this);
		item.find('.accordion-content').slideUp(0);
		item.find('.accordion-switch').click(function() {
		 var displ = item.find('.accordion-content').css('display');
		 item.closest('ul').find('.accordion-switch').each(function() {
		  var li = jQuery(this).closest('li');
		  li.find('.accordion-content').slideUp(300);
		  jQuery(this).parent().removeClass("selected");
		 });
		 if (displ=="block") {
		  item.find('.accordion-content').slideUp(300) 
		  item.removeClass("selected");
		 } else {
		  item.find('.accordion-content').slideDown(300) 
		  item.addClass("selected");
		 }
		});
	});
}





  
if ( $( '.kiwcks-container' ).length && jQuery() ) {
jQuery('.slideimage').hide();
jQuery('.slide-minicaption').hide();
jQuery('.slide-minicaptiontitle').hide();
jQuery('.accordian-slider-caption').hide();
jQuery('.accordian-slider-captiontitle').hide();
jQuery(window).bind("load", function() {
jQuery('.slideimage:hidden').fadeIn(800);
jQuery(".kwicks.horizontal li").css('background', '#FFF');
jQuery('.accordian-slider-caption').show();
jQuery('.accordian-slider-captiontitle').show();
jQuery('.kwicks').kwicks({
max : 850,
spacing : 0
});
jQuery(function(){
jQuery(".accordian-slider-caption").fadeTo(1, 0);
jQuery(".slide-minicaption").fadeTo(1, 0.9);
jQuery(".kwicks").each(function () {
jQuery(".kwicks").hover(function() {
jQuery('.accordian-slider-caption').stop().animate({opacity: 0.9, left: '50'}, 900 );
},function(){
jQuery('.accordian-slider-caption').stop().animate({opacity: 0, left: '940'}, 900 );
});
});
});
});
}

$.localScroll({
		target: '#services-container', // could be a selector or a jQuery object too.
		queue:true,
		duration:1000,
		hash:true,
		onBefore:function( e, anchor, $target ){
			// The 'this' is the settings object, can be modified
		},
		onAfter:function( anchor, settings ){
			// The 'this' contains the scrolled element (#content)
		}
	});
	
	$(document).ready(function() { $('.backtotop').click(function(){ $('html, body').animate({scrollTop:0}, 'slow'); return false; }); });
	
	
   /*PORTFOLIO ITEM HOVER*/
		if ( $( '.portfolio-item-hover-content' ).length && jQuery() ) {
	$('.portfolio-item-hover-content').hover(function() {
            $(this).find('div,a').stop(0,0).removeAttr('style');
            $(this).find('.hover-options').animate({opacity: 0.9}, 'fast');
            $(this).find('a').animate({"top": "45%" });
        }, function() {
            $(this).find('.hover-options').stop(0,0).animate({opacity: 0}, "fast");
            $(this).find('a').stop(0,0).animate({"top": "150%"}, "slow");
            $(this).find('a.zoom').stop(0,0).animate({"top": "150%"}, "slow");
        });
		}
		/*PORTFOLIO ITEM HOVER ENDS*/
		
   if ( $( '#slides' ).length && jQuery().slides ) {
		jQuery("#slides").hover( function() {
			jQuery('.slides-nav').fadeIn(400);
		}, function () {
			jQuery('.slides-nav').fadeOut(400);
		});
		
	}
if(jQuery().slides) {
		$postWrap = jQuery('.caption');
		$featuredImage = jQuery('.slide-img-bounce');
		$postWrap.css({
			bottom: "-100%"
		});
		$featuredImage.css({
			bottom: "-100%"
		});
		$postWrap.animate({
			bottom: "0"
		}, 900);
		$featuredImage.animate({
			bottom: "0"
		}, 200);
	jQuery('#slides').slides({
				effect: 'slide',
				crossfade: false,
				generatePagination: true,
				autoHeight: true,
				slideSpeed: 700,
				play: 6000,
				preload: true,
				animationStart: function() {				
					$postWrap.css({
						bottom: "-100%"
					});
					$featuredImage.css({
						bottom: "-100%"
					});	
				},
				animationComplete: function() {
					
					$postWrap.animate({
						bottom: 0
					}, 900);
					
					$featuredImage.animate({
						bottom: 0
					}, 200);
				}
			});
	}



   	if ( $( '#portfolio-slider' ).length && jQuery().cycle ) {
    	$('#portfolio-slider').cycle({
			fx:     'scrollLeft', 
			prev:    '#prev',
        	next:    '#next',
		 	pause:   0, 
			timeout: 0, 		
			delay:  -2000   
		});
  	}
  
  
  
 if ( $( '#main_navigation' ).length && jQuery() ) {

/* NAVIGATION JQUERY STARS */
var arrowimages={down:['downarrowclass', ' ', ], right:['rightarrowclass', ' ']}
var jqueryslidemenu={
animateduration: {over: 200, out: 100}, //duration of slide in/ out animation, in milliseconds
buildmenu:function(menuid, arrowsvar){
	jQuery(document).ready(function($){
		var $mainmenu=$("#"+menuid+">ul")
		var $headers=$mainmenu.find("ul").parent()
		$headers.each(function(i){
			var $curobj=$(this)
			var $subul=$(this).find('ul:eq(0)')
			this._dimensions={w:this.offsetWidth, h:this.offsetHeight, subulw:$subul.outerWidth(), subulh:$subul.outerHeight()}
			this.istopheader=$curobj.parents("ul").length==1? true : false
			$subul.css({top:this.istopheader? this._dimensions.h+"px" : 0})
			$curobj.children("a:eq(0)").css(this.istopheader? {paddingRight: arrowsvar.down[2]} : {}).append(
				'<img src="'+ (this.istopheader? arrowsvar.down[1] : arrowsvar.right[1])
				+'" class="' + (this.istopheader? arrowsvar.down[0] : arrowsvar.right[0])
				+ '" style="border:0;" />'
			)
			$curobj.hover(
				function(e){
					var $targetul=$(this).children("ul:eq(0)")
					this._offsets={left:$(this).offset().left, top:$(this).offset().top}
					var menuleft=this.istopheader? 0 : this._dimensions.w
					menuleft=(this._offsets.left+menuleft+this._dimensions.subulw>$(window).width())? (this.istopheader? -this._dimensions.subulw+this._dimensions.w : -this._dimensions.w) : menuleft
					if ($targetul.queue().length<=1) //if 1 or less queued animations
						$targetul.css({left:menuleft+"px", width:this._dimensions.subulw+'px'}).slideDown(jqueryslidemenu.animateduration.over)
				},
				function(e){
					var $targetul=$(this).children("ul:eq(0)")
					$targetul.slideUp(jqueryslidemenu.animateduration.out)
				}
			) //end hover
			$curobj.click(function(){
				$(this).children("ul:eq(0)").hide()
			})
		}) //end $headers.each()
		$mainmenu.find("ul").css({display:'none', visibility:'visible'})
	}) //end document.ready
}
}
jqueryslidemenu.buildmenu("main_navigation", arrowimages)

}

/*CLIENTS SLIDER*/
		if ( $( '#clients' ).length && jQuery().cycle ) {
		 $('#clients').cycle({
			fx: 'scrollLeft', 
			speedIn: 1000, 
			speedOut: 1000, 
			prev:    '#clients-prev',
			next:    '#clients-next',
			pause:   0, 
			timeout: 0, 	
			delay:  -2000 
		});
		}
		/*CLIENTS SLIDER ENDS*/
		
	

/*TOOLTIPS STARTS */
	if ( jQuery().tipsy ) {
	$("#social-01").tipsy({gravity: 'n'});
	$("#social-02").tipsy({gravity: 'n'});
	$("#social-03").tipsy({gravity: 'n'});
	$("#social-04").tipsy({gravity: 'n'});
	$("#social-05").tipsy({gravity: 'n'});
	$("#social-06").tipsy({gravity: 'n'});
	$("#social-07").tipsy({gravity: 'n'});
	$("#social-07").tipsy({gravity: 'n'});
	$("#social-08").tipsy({gravity: 'n'});
	
	$("#portfolio-view-01").tipsy({gravity: 'n'});
	$("#portfolio-view-02").tipsy({gravity: 'n'});
	$("#portfolio-view-03").tipsy({gravity: 'n'});
 
	
	}
	
/*TOOLTIPS ENDS */

   if ( $('.inner-page-bg .inner-content').length && jQuery() ) {
   var $IntroPages = jQuery('.inner-page-bg .inner-content');
	$IntroPages.animate({marginTop: "0px"} , 1500,'bounceout');
	
	}
	
	$('a.preview,a.zoom').each(function() {
        $(this).removeAttr('data-rel').attr('rel', 'prettyPhoto');
});
 
 $("a[rel^='prettyPhoto']").prettyPhoto({opacity:0.80,default_width:500,default_height:344,theme:'light_rounded',hideflash:false,modal:false});
   /*CYCLE SLIDER (CONTENT SLIDER)*/
  if ( $( '#cycle-slider' ).length && jQuery().cycle ) {
    $('#cycle-slider').cycle({
		fx:     'scrollLeft', 
		prev:    '#cycle-prev',
        next:    '#cycle-next',
		pager:  '#cycle-pagination' ,
		 pause:   0, 
		timeout: 0, 		
		delay:  -2000   
	});
	}
	
	 if ( $( '#portfolio-cycle-slider' ).length && jQuery().cycle ) {
    $('#portfolio-cycle-slider').cycle({
		fx:     'scrollLeft', 
	prev:    '#portfolio-cycle-prev',
        next:    '#portfolio-cycle-next',
		 pause:   0, 
		timeout: 0, 		
		delay:  -2000   
	});
	}
	/*CYCLE SLIDER (CONTENT SLIDER) ENDS*/
 
 
  /*ELASTIC SLIDER*/
  if ( $( '#ei-slider' ).length && jQuery().eislideshow ) {
                $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		:  0.60,
					titlespeed          : 800
                });
			}
 /*ELASTIC SLIDER ENDS*/
 /*SCROLL TO ANCHOR (SERVCES)*/
 if ( jQuery().anchorScroll ) {
		$("#Blueprint").anchorScroll();
		$("#Web").anchorScroll();
		
		}
	/*SCROLL TO ANCHOR (SERVCES) ENDS*/
	
	
	/*NIVO SLIDER SLIDER STARTS */
	 if ( $( '#slider3' ).length && jQuery().nivoSlider ) {
	 $('#slider3').nivoSlider({
	 pauseTime:5000,
	 pauseOnHover:false
	 }); 
	 }
	/*NIVO SLIDER ENDS */
 
 
 
 
    if ( $( '#portfolio-details-slider' ).length && jQuery().cycle ) {
  $('#portfolio-details-slider').cycle({
		fx:     'fade', 
		prev:    '#prev',
        next:    '#next',
		 pause:   0, 
		timeout: 0, 		
		speedIn: 2500, 
		speedOut: 500 
	});
  
  }




 
/*if ( $( '#contact-form' ).length && jQuery() ) {
	$('form#contact-form').submit(function() {
	function resetForm($form) {
	    $form.find('input:text, input:password, input:file, select, textarea').val('');
	    $form.find('input:radio, input:checkbox')
	    .removeAttr('checked').removeAttr('selected');
	}
	
	$('form#contact-form .error').remove();
	
	var hasError = false;
	
	$('.requiredField').each(function() {

if(jQuery.trim($(this).val()) == '') {

	var labelText = $(this).prev('label').text();
 	$(this).parent().append('<div class="error">Preenchimento obrigatorio '+labelText+'</div>');
 	$(this).addClass('inputError');
 	hasError = true;

 } else if(
 
 	$(this).hasClass('email')) {

	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

		if(!emailReg.test(jQuery.trim($(this).val()))) {
	 
			var labelText = $(this).prev('label').text();

		 	$(this).parent().append('<div class="error">You entered an invalid '+labelText+'</div>');
		 	
		 	$(this).addClass('inputError');
		 	
		 	hasError = true;
		}
	}
});

if(!hasError) {

	$('form#contact-form input.submit').fadeOut('normal', function() {

	$(this).parent().append('');
});

var formInput = $(this).serialize();

$.post($(this).attr('action'),formInput, function(data){

	$('#contact-form').prepend('<div><span class="fancy-success">Sua mensagem foi enviada com sucesso.</span></div>');

	resetForm($('#contact-form'));

	$('.fancy-success').fadeOut(5000); 
});
}
	return false;
});
}*/ 
 
 
 
   if ( $( '#map' ).length && jQuery() ) {
  /*GOOGLE MAPS*/
var $map = $('#map');
		 
			$map.gMap({
				
				address: 'Level 13, 2 Elizabeth St, Melbourne Victoria 3000 Australia',
				 
				zoom: 18,
				markers: [
					{ 'address' : 'Level 13, 2 Elizabeth St, Melbourne Victoria 3000 Australia' },
					 
				]
				
			});

		 }
  /*GOOGLE MAPS ENDS*/
 
 
 
 
 
  if ( $( 'ul#filterable' ).length && jQuery() ) {
$('ul#filterable a').click(function() {
$(this).css('outline','none');
$('ul#filterable .current').removeClass('current');
$(this).parent().addClass('current');

return false;
});
}
 
if ( $( '.portfolio-container' ).length && jQuery() ) {
var 
speed = 700, 
$wall = $('#portfolio').find('.portfolio-container ul')
;
$wall.masonry({
singleMode: true,
itemSelector: '.one-fourth:not(.invis)',
animate: true,
animationOptions: {
duration: speed,
queue: false
}
});

$('#filterable a').click(function(){
var colorClass = '.' + $(this).attr('class');
if(colorClass=='.all') {
$wall.children('.invis')
.toggleClass('invis').fadeIn(speed);
} else { 
$wall.children().not(colorClass).not('.invis')
.toggleClass('invis').fadeOut(speed);
$wall.children(colorClass+'.invis')
.toggleClass('invis').fadeIn(speed);
}
$wall.masonry();
 return false;
});

}

if ( $( '.services-container' ).length && jQuery() ) {
var 
speed = 700, 
$wall = $('#services').find('.services-container ul')
;
$wall.masonry({
singleMode: true,
itemSelector: '.one:not(.invis)',
animate: true,
animationOptions: {
duration: speed,
queue: false
}
});

$('#filterable a').click(function(){
var colorClass = '.' + $(this).attr('class');
if(colorClass=='.all') {
$wall.children('.invis')
.toggleClass('invis').fadeIn(speed);
} else { 
$wall.children().not(colorClass).not('.invis')
.toggleClass('invis').fadeOut(speed);
$wall.children(colorClass+'.invis')
.toggleClass('invis').fadeIn(speed);
}
$wall.masonry();
 return false;
});

}



 
 if ( $( '.portfolio-container' ).length && jQuery() ) {

var 
speed = 700, 
$wall = $('#portfolio').find('.portfolio-container ul')
;
$wall.masonry({
singleMode: true,
itemSelector: '.one-third:not(.invis)',
animate: true,
animationOptions: {
duration: speed,
queue: false
}
});
$('#filterable a').click(function(){
var colorClass = '.' + $(this).attr('class');
if(colorClass=='.all') {
$wall.children('.invis')
.toggleClass('invis').fadeIn(speed);
} else { 
$wall.children().not(colorClass).not('.invis')
.toggleClass('invis').fadeOut(speed);
$wall.children(colorClass+'.invis')
.toggleClass('invis').fadeIn(speed);
}
$wall.masonry();
 return false;
});
 
 
 }
  if ( $( '.portfolio-container' ).length && jQuery() ) {

var 
speed = 700, 
$wall = $('#portfolio').find('.portfolio-container ul')
;
$wall.masonry({
singleMode: true,
itemSelector: '.one-half:not(.invis)',
animate: true,
animationOptions: {
duration: speed,
queue: false
}
});
$('#filterable a').click(function(){
var colorClass = '.' + $(this).attr('class');
if(colorClass=='.all') {
$wall.children('.invis')
.toggleClass('invis').fadeIn(speed);
} else { 
$wall.children().not(colorClass).not('.invis')
.toggleClass('invis').fadeOut(speed);
$wall.children(colorClass+'.invis')
.toggleClass('invis').fadeIn(speed);
}
$wall.masonry();
 return false;
});
 
 
 }
 
 if ( $( '.tweet' ).length && jQuery()) {
$(".tweet").tweet({
	 username: "trendywebstar",
	 join_text: null,
	 avatar_size: null,
	 count: 3,
	 auto_join_text_default: "we said,", 
	 auto_join_text_ed: "we",
	 auto_join_text_ing: "we were",
	 auto_join_text_reply: "we replied to",
	 auto_join_text_url: "we were checking out",
	 loading_text: "loading tweets..."
 });
 }




 
   if (jQuery().tabify) {
 $('#menu').tabify()
            }

 
 $("#accordion-menu > li > div").click(function(){
	if(false == $(this).next().is(':visible')) {
		$('#accordion-menu ul').slideUp(300);
	}
	$(this).next().slideToggle(300);
});
	$('#accordion-menu ul:eq(0)').show();
 
 
  if ( $( '#portfolio-2' ).length && jQuery()) {
 	$('#portfolio-2').cycle({
	fx: 'scrollLeft', 
	speedIn: 800, 
	speedOut: 500, 
	delay: 3000
});
 
 }
 
 
 
 
 
   });
   
   
   jQuery.noConflict()(function($){
$(document).ready(function() { 
 var originalFontSize = $('body').css('font-size');
 $(".resetFont").click(function(){
 $('body').css('font-size', originalFontSize);
 });
 $(".increaseFont").click(function(){
 var currentFontSize = $('body').css('font-size');
 var currentFontSizeNum = parseFloat(currentFontSize, 12);
 var newFontSize = currentFontSizeNum+1;
 $('body').css('font-size', newFontSize);
 return false;
 });
 $(".decreaseFont").click(function(){
 var currentFontSize = $('body').css('font-size');
 var currentFontSizeNum = parseFloat(currentFontSize, 12);
 var newFontSize = currentFontSizeNum-1;
 $('body').css('font-size', newFontSize);
 return false;
 });
})
});

jQuery.noConflict()(function($){
$(document).ready(function() { 
 var originalFontSize = $(':header').css('font-size');
 $(".resetFontHeader").click(function(){
 $(':header').css('font-size', originalFontSize);
 });
 $(".increaseFontHeade").click(function(){
 var currentFontSize = $(':header').css('font-size');
 var currentFontSizeNum = parseFloat(currentFontSize, 12);
 var newFontSize = currentFontSizeNum+1;
 $(':header').css('font-size', newFontSize);
 return false;
 });
 $(".decreaseFontHeader").click(function(){
 var currentFontSize = $(':header').css('font-size');
 var currentFontSizeNum = parseFloat(currentFontSize, 12);
 var newFontSize = currentFontSizeNum-1;
 $(':header').css('font-size', newFontSize);
 return false;
 });
})
});
jQuery.noConflict()(function($){
$(document).ready(function() {
$('#body-font').bind('change', function() {
var font = $(this).val();
 $('p, a ,#main_navigation, span, ul ,li , ol').css('fontFamily', font);
 
});
});
});

jQuery.noConflict()(function($){
$(document).ready(function() {
$('#headings-font').bind('change', function() {
var font = $(this).val();
 $(':header, :header a, a:header, span:header, :header span').css('fontFamily', font);
 
});
});
});
jQuery.noConflict()(function($){
	$(document).ready(function() {
	
$("#switcher-handle > #handle").toggle
	(
		function()
		{
			$('#switcher-handle').animate({left:'0px'}, {queue:false,duration:200});
			$('#switcher-handle > #handle').addClass('out');
		}
		,function()
		{
			$('#switcher-handle').animate({left:'-182px'}, {queue:false,duration:200});
			$('#switcher-handle > #handle').removeClass('out');
		}
	);
	
	
			});
			});
			
   });
