/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function ($) {
    $(".sq1").mouseover(function() {
         $(this).animate({ backgroundColor:'#f00'},1000);
    }).mouseout(function() {
        $(this).animate({ backgroundColor:'#ccc'},1000);
    });       
});
