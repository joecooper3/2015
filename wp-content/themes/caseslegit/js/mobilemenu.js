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
                console.log('I did it');
               
            }
            else {
                //This one's for the mobile screens. Hide the menu, which is now a column.
                jQuery(".main-navigation").find("ul").css("display", "none");
                	console.log('gone 3 gar');
            }
            resValue = jQuery("#responsiveCheck").css("width");
            console.log(resValue);
        }

    };
    //Displays new column menu on button click
    jQuery(".menu-toggle").click(function () {
        jQuery("#primary-menu").slideToggle("fast");
    });
    
    //First sub-menu clicks
    jQuery("#primary-menu").children('li').find('a').click(function () {
        jQuery(this).siblings(".sub-menu").slideToggle("fast");
    });
    
    // run test on initial page load
    resChange();

    // run test on resize of the window
    jQuery(window).resize(resChange);


