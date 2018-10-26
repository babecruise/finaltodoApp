<?php 

//add session function
 function todoadd($todoItems){
    $todoItems = $_SESSION['todoItem'];
      $_SESSION['todoItem'][] =$_POST['todoItem'] . ' - '. $_POST['date'] ;
        header('location: ?reload=false'); 
   //header function stops the session from duplicating itself on relaod.  
 }

 //delete sesssion function
function delete($delete){
  $key=$_POST['id'];
  unset($_SESSION['todoItem'][$key]); 
}
?>


