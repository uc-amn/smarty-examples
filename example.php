<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require 'libs/Smarty.class.php';
$smarty = new Smarty;

// Assigning a value to a variable
$smarty->assign("name", "Aman"); 

// Creating an array
$users = array(
    array("name" => "Aman", 
           "department" => "CS"), 
    
    array("name" => "Aaditya",
           "department" => "CS"),

    array('name' => 'Arsh', 
          'department' => 'CS'),
    
    array('name' => 'Bhanu', 
           'department' => 'EE')
);

$user2 = array(
       array("name" => "Aman", 
             "role" => "Web Developer"
       )
); 

// $fruits_name = array(
       
// )

$smarty -> assign ("hello", 'bob');
$smarty->assign("user_data", $user2); 

// Practising assigning the variables


// assigning array data to a variable
$smarty->assign('user_list', $users); 

//Asking smarty to display the values
$smarty->display("template/bare.tpl"); 

?>