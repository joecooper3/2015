/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(function ($) {
$("input[type='checkbox']").change(function(){
    if($(this).is(":checked")){
        $(this).closest(".program-check").addClass("ref-selected"); 
        $(this).closest(".program-check").addClass("ref-selected-box"); 
        console.log("unrill");
    }else{
        $(this).closest(".program-check").removeClass("ref-selected");
        $(this).closest(".program-check").removeClass("ref-selected-box");
        console.log("rollercoaster");
    }
});
});