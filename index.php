<?php
//This is my controller

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//instantiate F3 base class
$f3 = Base::instance();

// define a default route (SDEV328/week6)
$f3->route('GET /', function($f3) {

    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with templates');

    //Add your fav food and color to the hive
    $f3->set('food', 'pozole');
    $f3->set('color', 'lavender');

    //radius variable
    $f3->set('radius', '10');

    //define an array of fruits
    $fruits = array("apple", "banana", "orange");
    //put this array into our hive
    $f3->set('fruits', $fruits);
    //for each loops
    //     array name |  placeholder for each element in our array
    /*foreach ($fruits as $fruit){
        echo $fruit;
    }*/

    //associative array
    $cupcakes = array("chocolate"=>"Chocolate truffle", "strawberry"=>"Strawberry Shortcake",
        "maple"=>"Maple Walnut");
    //putting it into the Fat-Free hive
    $f3->set('cupcakes', $cupcakes);

    //creating an array of colors
    $f3->set('colors', array("red", "blue", "pink"));

    //add a variable that stores your age
    $f3->set('age', 24);
    //in the view page, if age is over 30, print "you are mature",
    //otherwise print "you are a spring chicken"



    //instantiate a view
    $view = new Template(); // template is a fat free class
    echo $view->render("views/info.html"); // render method, return text on template
});

//run fat free
$f3->run();
