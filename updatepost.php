<?php
     session_start();
  //   include "../database/env.php";
   //data collection
   $title =$_REQUEST['title'];
   $details =$_REQUEST['details'];
   $author =$_REQUEST['author'];
   $id =$_REQUEST['id'];
//init an EMPTY ARRAy
$errors=[];
   //validation data
   if(empty($title)){
    $errors["title_error"]="title is empty!";
   }

   if(empty($details)){
    $errors["detail_error"]="detail is empty!";
   }
   if(strlen($author)>60){
    $errors["author_error"]="author,your name too long!";
   }
   //print_r($errors);
  //checK eRRoRS
  if(count($errors) > 0){
    //RediRect BaCK!
    $_SESSION['errors'] =$errors;
    header("Location: ../editpost.php?post_id=$id");
  }else{
    //proceed
    $query="UPDATE posts SET ,title='$title',detail='$details',author='$author'";
    $res=mysqli_query($conn,$query);
    var_dump($res);

  }
?>
