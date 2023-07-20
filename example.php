<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require 'libs/Smarty.class.php';

$smarty = new Smarty; // declare object in Smarty
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setCacheDir('cache/'); 


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


$smarty->assign('string1', 'uCertify LEARN is specifically designed to deliver Higher Ed');
$smarty->assign('string2', 'At uCertify, we believe that assessments are the key ');

$smarty->assign('myOption', array(1001 => 'Akash', 1002 => 'Veer', 1003 => 'Raheem'));
$smarty->assign('myoption', 1002);

$arr = [10, 20, 30];
$smarty->assign('var', $arr);
$str = "this is second example";
$smarty->assign('str', $str);
$smarty->assign('strc',"concat");

$table = 5;
$smarty->assign('num', $table);

$str2 = 'This is an example of';
$smarty->assign('str2', $str2);



$smarty->assign('selectbx', array(1, 2, 34, 5));
$smarty->assign('num', 11);

//Asking smarty to display the values
$smarty->display("template/example.tpl"); 




?>