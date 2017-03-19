<?php

require_once('model/SingleProject.model.php');
require_once('model/portfolio.model.php');

$project1 = new SingleProject();
//$project1->title ='tic tac toe';
$project1->fakeIt();

$project2 = new SingleProject();
//$project2->title ='hangman';
$project2->fakeIt();

// create my entier portfolio
$portfolio1 = new Portfolio();
$portfolio1->fakeIt();
//$portfolio1->addProject($project1);
//$portfolio1->addProject($project2);
//$portfolio1->deleteProject($project1);
////array_push($portfolio->projects,$project1);

print_r($portfolio1);
