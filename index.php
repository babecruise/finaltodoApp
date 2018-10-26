<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
<?php include "Function.php"; ?>

<?php
//add session
if (isset($_POST["submit"])){
  todoadd($_POST["todoItem"]);
}

//delete sesssion 
if (isset($_POST['delete'])) {
  delete($_SESSION['todoItem']);
}

//update session
if (isset($_POST['update'])) {
  $key=$_POST['id'];
   $todoItem = $_POST['storedsession'] . $_POST['newdate'];
    $todoItem;
   if (isset($todoItem)){
    $_SESSION['todoItem'][$key] = $_POST['storedsession'] . " - " .$_POST['newdate'] ;
   }
}

?>

<div class="container">
 <ul class="list-group">
 <?php if (isset($_SESSION['todoItem'])){ ?>
 <?php foreach($_SESSION['todoItem'] as $i => $todoItem) { ?>
  <form action = "" method= "POST">
  <li class="list-group-item list-group-item-">
  <span><?php echo ($todoItem); ?></span>
  <button type="submit" class="btn btn-danger float-right"  name="delete" >Delete</button>
  <button type="submit" class="btn btn-primary float-right"  name="edit" >Edit</button>

<?Php
if (isset($_POST['edit'])){ ?>
 <input type="text" name="storedsession" placeholder="User Name" />
 <input type="date" id="end" name="newdate">
 <input  class="submit .transparentButton" value="update" type="submit" name="update"/>
<?php } ?>
  <input type="hidden" name='id' value='<?php echo $i; ?>'>
 </form>
  <?php
    }
  ?>
  <?php
    }
  ?>
  </li>
  </ul>


    <form action = "" method= "POST">
   <div class="form-group">
    <label for="todoItem">Item</label>
<input type="text" class="form-control" name="todoItem" placeholder="Buy groceries...">
<input type="date" id="end" name="date">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" value="submit">Add To do</button>
  <button type="submit" class="btn btn-success" name="sort" value="sort">Sort by due date</button>
  </form>
    </div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>