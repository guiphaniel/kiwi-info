<?php 
const TEL_NUM = "641850305";
const MAIL_ADDRESS = "guilhem.richaud@etu.univ-lyon1.fr";
const POST_ADDRESS = "3 Avenue Pierre Semard, 01000 Bourg-en-Bresse";

function addActive($link) {
    if ($_SERVER['PHP_SELF'] == $link) {
        return 'active';
    } 
}

function validateImage($link){
    if (file_exists($link.'.webp') && str_contains($_SERVER['HTTP_ACCEPT'], 'image/webp')) {
        return $link.'.webp';
    } else {
        return $link;
    }
}