  jQuery(document).ready(function($) {
    $('#colorpicker').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn("fast");
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut("fast");
				return false;
			},
			onChange: function (hsb, hex, rgb) {
        var color = hex;
          var defaultPattern = "url(./../background-patterns/body-bg-1.jpg)";
          var defaultPatternWood = "url(./../background-patterns/body-bg-1.jpg)";
       
        $('body').css({
            backgroundColor: '#' + color,
			 backgroundImage : defaultPattern
            
        });     
        $.cookie("portable_cookie_color", color);   
        $.cookie("portable_cookie_pattern", null);   
        $.cookie("portable_cookie_defaultBg", defaultPattern);   
			},
    
    });    
    
    $('#style-switcher a.color-box').each(function (i) {
        var a = $(this);
        a.css({
            backgroundColor: '#' + a.attr('data-rel')
        })
    })    
  /*  */

   var switcher_skins = $('#style-switcher a.color-box');
   var switcher_link = $('#skins-switcher');
   switcher_skins.each(function(i) {
    var color = $(this).attr('data-rel');
    var defaultPattern = "url(./../background-patterns/body-bg-1.jpg)";
      var defaultPatternWood = "url(./../background-patterns/body-bg-1.jpg)";
      
   });  
   
     /*STYLESHEETS LOAD STARTS*/ 
   switcher_skins.click(function(e) {
    var color = $(this).attr('data-rel');
    var skins;
	var defaultPatternWood = "url(./../background-patterns/body-bg-1.jpg)";
    var defaultPattern = "url(./../background-patterns/body-bg-1.jpg)";
   
	
	
	
	
     
    $.cookie("portable_cookie_pattern", null);   
    $.cookie("portable_cookie_bgimage",null);

    $.cookie("portable_cookie_color", color);  
    $.cookie("portable_cookie_skins", atrrHref);
    $.cookie("portable_cookie_defaultBg", defaultPattern);    
    return false;
	
   });  
   
  var color = $.cookie("portable_cookie_color");
  var portable_skins = $.cookie("portable_cookie_skins");
  var defaultPattern = $.cookie("portable_cookie_defaultBg");
  var pattern = $.cookie("portable_cookie_pattern");
  
  if (portable_skins) {
    $("#skins-switcher").attr("href",portable_skins);
    $('body').css({
        backgroundColor: '#FFFFFF'
        
    });
  }

  $('#style-switcher a.pattern-box').click(function (e) {
      e.preventDefault();
      var patternUrl = 'url(./../background-patterns/' + $(this).attr('data-rel') + '.jpg)';
      $('body').css({
          backgroundImage: patternUrl,
          backgroundRepeat: "repeat"
      });
      $.cookie("portable_cookie_bgimage",null);
      $.cookie("portable_cookie_pattern", patternUrl)
  });
  
  var defaultPattern = $.cookie("portable_cookie_defaultBg");
  var color = $.cookie("portable_cookie_color");
  var background = $.cookie("portable_cookie_bgimage");
  if (color) {
      $('body').css({
          backgroundColor: '#FFFFFF',
          backgroundImage : defaultPattern
      });
  }
    var defaultPatternWood = $.cookie("portable_cookie_defaultBgWood");
  var color = $.cookie("portable_cookie_color2");
  var background = $.cookie("portable_cookie_bgimage2");
  if (color) {
      $('body').css({
          backgroundColor: '#FFFFFF',
          backgroundImage : defaultPatternWood
      });
  }
  var pattern = $.cookie("portable_cookie_pattern");
  if (pattern) {
      $('body').css({
          backgroundImage: pattern,
          backgroundRepeat: "repeat"
      });
  } else {
    if (background) {
        $('body').css({
          backgroundImage: background,
          backgroundRepeat: "repeat",
          backgroundPosition: "top center",
        
        });
    }    
  }  

  $('#style-switcher a.bg-box').each(function (i) {
    var backgroundUrl = 'url(./../background-patterns/' + $(this).attr('data-rel') + '.jpg)';
    var a = $(this);
      a.css({
          backgroundImage: backgroundUrl
      })
  })
    
  $('#style-switcher a.bg-box').click(function (e) {
      e.preventDefault();
      var backgroundUrl = 'url(./../background-patterns/' + $(this).attr('data-rel') + '.jpg)';
      $('body').css({
          backgroundImage: backgroundUrl,
          backgroundRepeat: "repeat",
        
        
      });
    $.cookie("portable_cookie_bgimage",backgroundUrl)
  });

  var background = $.cookie("portable_cookie_bgimage");
  if (background) {
      $('body').css({
        backgroundImage: background,
        backgroundRepeat: "repeat",
      
      
      });
  }
         
});   
 