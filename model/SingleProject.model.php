<?php

 class SingleProject{
     
     var $title =''; // string
     var $images = array(); //empty array
     var $description =''; // array of strings url
     var $links = array(); //array images of the portfolio
     var $thumb = ''; //the main image of the portfolio
     var $category =''; // string with the category
     
function fakeIt(){
    $this->id = rand(0,999); 
    $this->title = 'Title of project '.$this->id;
     
 }
     
     
     
 }