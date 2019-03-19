<?php 
require "src/getvalue_class.php";

if(isset($_POST['btn'])) {
    $name = $_POST['name'];
    $Gender = $_POST['Gender'];
    $Province = $_POST['Province'];
    $Email = $_POST['Email'];

    
$first = new getvalueclass($name,$Gender,$Province,$Email);
echo "name  ". $first->getInput(). "<br> Gender ".$first->getInput(). "<br> province ".$first->getInput(). "<br> email ".$first->getInput();
}