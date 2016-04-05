/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var referralChange, boxVanish;
//this first part is for Wordpress, which takes issue with dollar signs or whatever
jQuery(function($) {
    //meat of the script here
referralChange = function () {
$("input[type='checkbox']").change(function(){
    if($(this).is(":checked")){
        $(this).closest(".program-check").addClass("ref-selected"); 
        $(this).siblings(".custom-checkbox").css('background', 'url(http://www.cases.org/newsite/wp-content/themes/caseslegit/images/checkon.png)');
    }else{
        $(this).closest(".program-check").removeClass("ref-selected");
        $(this).siblings(".custom-checkbox").css('background', 'url(http://www.cases.org/newsite/wp-content/themes/caseslegit/images/checkoff.png)');
        
    }
});
};
//run this script on the page load
referralChange();
//run it again whenever new fields appear (namely, this line is telling jQuery
//to look for changes in the conditional fields)
$(".caldera-forms-conditional-field").on("DOMSubtreeModified",referralChange);
//okay, here's a function to address the way Caldera will leave blank spaces
//for invisible things
//this function will check if a div is empty, then make it hidden if so, and vice versa
boxVanish = function () {
    var justLookin = $(this).is(':empty');
    console.log("Before if: " + justLookin)
    if( $(this).is(':empty')) {
        $(this).closest(".col-sm-3").css('display','none');
        console.log("I belong " + justLookin);
    }
    else {
        $(this).closest(".col-sm-3").css('display','block');
        console.log("tune in " + justLookin);
    }
    var justLookin = $(this).is(':empty');
    console.log("After if: " + justLookin);
};
//run this script at page load
$(".caldera-forms-conditional-field").closest(".col-sm-3").css('display','none');
//and run this script whenever said div changes
$(".caldera-forms-conditional-field").on("DOMSubtreeModified",boxVanish);
$(function () {
  $('[data-toggle="popover"]').popover({html:true})
})
});