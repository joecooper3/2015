/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var referralChange;
//this first part is for Wordpress, which takes issue with dollar signs or whatever
jQuery(function($) {
    //meat of the script here
referralChange = function () {
$("input[type='checkbox']").change(function(){
    if($(this).is(":checked")){
        $(this).closest(".program-check").addClass("ref-selected"); 
        $(this).siblings(".custom-checkbox").css('background', 'url(http://www.localhost/2015/wp-content/themes/caseslegit/images/checkon.png)');
        console.log("four");
    }else{
        $(this).closest(".program-check").removeClass("ref-selected");
        console.log("days");
        $(this).siblings(".custom-checkbox").css('background', 'url(http://www.localhost/2015/wp-content/themes/caseslegit/images/checkoff.png)');
    }
});
};
//run this script on the page load
referralChange();
//run it again whenever new fields appear (namely, this line is telling jQuery
//to look for changes in the conditional fields)
$(".caldera-forms-conditional-field").bind("DOMSubtreeModified",referralChange);
});