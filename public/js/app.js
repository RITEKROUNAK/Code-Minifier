/*-------------------------------------------------------------------------------------------------------------------------------*/
/*This is main script file that contains custom scripts used in this template*/
/*-------------------------------------------------------------------------------------------------------------------------------*/
/* Package Name: Code Minifier*/
/* Author: Ritek Rounak */
/* Copyright: (C) 2022 */
/*-------------------------------------------------------------------------------------------------------------------------------*/
/*Styles start from here
 /*-------------------------------------------------------------------------------------------------------------------------------*/

"use strict";
$(document).ready(function () {
    $('.minified_output').select();
    $('.select_text').on('click', function () {
        $('.minified_output').select();
    });
});
document.addEventListener('DOMContentLoaded', function(){
    Typed.new('.element', {
        strings: ["CSS Files", "Javascript Files", 'HTML Files'],
        typeSpeed: 100,
        loop: true,
    });
});