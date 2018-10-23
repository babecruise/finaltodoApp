<?php 
 
 

 function todoadd($todoItems){
  $todoItems = $_SESSION['todoItem'];

    $_SESSION['todoItem'][] = $_POST['todoItem'] . ' - ' . $_POST['date'];
   
    header('location: ?reload=false');
   
    
 }

/*
  $todoItems = isset($_SESSION['todoItem']) ? $_SESSION['todoItem'] : [];

  if (isset($_POST["submit"])) {

    if (isset($_SESSION['todoItem'])) {
      $_SESSION['todoItem'][] = $_POST['todoItem'];
    }else{
      $_SESSION['todoItem'] = [];
      $_SESSION['todoItem'][] = $_POST['todoItem'];
    }
    header('location: ?reload=false');
   }
*/


//var_dump($_SESSION['todoItem']);


//session_unset();


?>




