/* 
 * Joe Cooper coded this. All of it. If
 * you're looking at this source and want to steal
 * it, that's fine. Give me a hat-tip in the comments if you want.
 */
jQuery(document).ready(function ($) {

//This function only triggers if a breakpoint is reached
    var resValue, resChange;
    resChange = function () {
        if ($("#responsiveCheck").css("content") !== resValue) {
            //The below represents the menu on larger screens. Make sure it comes back up.
            if ($("#responsiveCheck").css("content") === '"L"') {
                $(".main-navigation").find("ul").css("display", "block");
               
            }
            else {
                //This one's for the mobile screens. Hide the menu, which is now a column.
                $(".main-navigation").find("ul").css("display", "none");
            }
            resValue = $("#responsiveCheck").css("content");
        }

    };
    //Displays new column menu on button click
    $(".menu-toggle").click(function () {
        $("#primary-menu").slideToggle("fast");
    });
    
    //First sub-menu clicks
    $("#primary-menu").children('li').find('a').click(function () {
        $(this).siblings(".sub-menu").slideToggle("fast");
    });
    
    // run test on initial page load
    resChange();

    // run test on resize of the window
    $(window).resize(resChange);



});
