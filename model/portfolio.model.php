<?php 
 
 /**
  * this is the class that contains all the single project of the portfolio
  * 
  * 
  */
 class portfolio{
     var $projects= array();
     function addProject($var1)
     {
         array_push($this->projects,$var1);
         }
         function deleteProject($project)
     {
         for ($i=0; $i<count($this->projects);$i++){
            if($this->projects[$i]->title == $project->title){
         unset($this->projects[$i]);
         
         }
         
     }
     return;
 }
   //  var $title =''; // string
   //  var $images = array(); //empty array
   //  var $description =''; // array of strings url
   //  var $links = array(); //array images of the portfolio
   //  var $thumb = ''; //the main image of the portfolio
   //  var $category =''; // string with the category
 
  function fakeIt()
  {$project1 = new SingleProject();
//$project1->title ='tic tac toe';
$project1->fakeIt();

$project2 = new SingleProject();
//$project2->title ='hangman';
$project2->fakeIt();

$this->addProject($project1);
$this->addProject($project2);
     
 }
 }