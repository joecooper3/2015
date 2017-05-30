/* 
 * Joe Cooper coded this. All of it. If
 * you're looking at this source and want to steal
 * it, that's fine. Give me a hat-tip in the comments if you want.
 */

//This function only triggers if a breakpoint is reached
    var resValue, resChange;
    resChange = function () {
        if (jQuery("#responsiveCheck").css("width") !== resValue) {
            //The below represents the menu on larger screens. Make sure it comes back up.
            if (jQuery("#responsiveCheck").css("width") === '51px') {
                jQuery(".main-navigation").find("ul").css("display", "block");
                
               
            }
            else {
                //This one's for the mobile screens. Hide the menu, which is now a column.
                jQuery(".main-navigation").find("ul").css("display", "none");
                	
            }
            resValue = jQuery("#responsiveCheck").css("width");
            
        }

    };
    
    
    // Now for that freaking fade menu...
 var resValue2, resChange2;
    resChange2 = function ()  {         
if (jQuery("#responsiveCheck").css("height") === '50px')
            {
                jQuery("#masthead-fade").css("display","none");
            }
            resValue2 = jQuery("#responsiveCheck").css("height");
        };
        
        
    //Displays new column menu on button click
    jQuery(".menu-toggle").click(function () {
        jQuery("#primary-menu").slideToggle("fast");
    });
    
    //First sub-menu clicks
    jQuery("#primary-menu").children('li').find('a').click(function () {
        if (jQuery("#responsiveCheck").css("width") === '50px') {
        jQuery(this).siblings(".sub-menu").slideToggle("fast");
    }
    });
    
    // run test on initial page load
    resChange();
    resChange2();

    // run test on resize of the window
    jQuery(window).resize(resChange);
    jQuery(window).resize(resChange2);
  

    // sliding component of navbar
    //
    
    var previousScroll = 0;

jQuery(window).scroll(function () {
    var currentScroll = jQuery(this).scrollTop();
    if (currentScroll > 300 && jQuery("#responsiveCheck").css("height") === '51px') {
        if (currentScroll > previousScroll) {
            jQuery('#masthead-fade').fadeOut(100);
        } else {
            jQuery('#masthead-fade').fadeIn(200);
        }
    } 
    setTimeout( function() { previousScroll = currentScroll}, 200);
    if (currentScroll < 300) {
        jQuery('#masthead-fade').slideUp(100);
    }
});