<?php
/*session_start();
//get data(session_staRt());


//$_SESSION['name']= "badhon";
$title =$_REQUEST['title'];

$details =$_REQUEST['details'];
$author =$_REQUEST['author'];


//data validation
 $errors = [];

//title validation
if( empty($title) ) {
  $errors["title_error"]="where is title?";
  
}
elseif(strlen($title)>100){
 $errors["title_error"]= "how much!";
}


//details validation

if(empty($details)){
 $errors["detail_error"]="where is detail?";
}
//*eRRoRS > 0
if(count($errors)>0){
    $_SESSION['data'] =$_REQUEST;
    $_SESSION['errors'] =$errors;
    //REDIRECTION
    header("location: ../index.php");

}
else{
  echo "no error found";
}
*/
?>
<?php
/*session_start();
//get data(session_staRt());

include "../database/env.php";
//$_SESSION['name']= "badhon";
$title =$_REQUEST['title'];

$details =$_REQUEST['details'];
$author =$_REQUEST['author'];


//data validation
 $errors = [];
 //print_r($_REQUEST);
 //exit();
//title validation
if( empty($title) ) {
  $errors["title_error"]="where is title?";
  
}
elseif(strlen($title)>100){
 $errors["title_error"]= "how much!";
}


//details validation

if(empty($details)){
 $errors["detail_error"]="where is detail?";
}
//*eRRoRS > 0
if(count($errors)>0){
    $_SESSION['data'] =$_REQUEST;
    $_SESSION['errors'] =$errors;
    //REDIRECTION
    header("location: ../index.php");

}
else{
  print_r($conn);
}*/

?>
<?php
/*session_start();
//get data(session_staRt());

include "../database/env.php";
//$_SESSION['name']= "badhon";
$title =$_REQUEST['title'];

$details =$_REQUEST['details'];
$author =$_REQUEST['author'];


//data validation
 $errors = [];
 //print_r($_REQUEST);
 //exit();
//title validation
if( empty($title) ) {
  $errors["title_error"]="where is title?";
  
}
elseif(strlen($title)>100){
 $errors["title_error"]= "how much!";
}


//details validation

if(empty($details)){
 $errors["detail_error"]="where is detail?";
}
//*eRRoRS > 0
if(count($errors)>0){
    $_SESSION['data'] =$_REQUEST;
    $_SESSION['errors'] =$errors;
    //REDIRECTION
    header("location: ../index.php");

}
else{
 $query="INSERT INTO posts(title,details, author) VALUES ('$title','$details','$author')";
 $res=mysqli_query($conn,$query);
 var_dump($res);
}*/

?>


<?php
session_start();
//$query="SELECT * FROM `posts` WHERE 1";

//get data(session_staRt());

include "../database/env.php";
//$_SESSION['name']= "badhon";
$title =$_REQUEST['title'];

$details =$_REQUEST['details'];
$author =$_REQUEST['author'];


//data validation
 $errors = [];
 //print_r($_REQUEST);
 //exit();
//title validation
if( empty($title) ) {
  $errors["title_error"]="where is title?";
  
}
elseif(strlen($title)>100){
 $errors["title_error"]= "how much!";
}


//details validation

if(empty($details)){
 $errors["detail_error"]="where is detail?";
}
//*eRRoRS > 0
if(count($errors)>0){
    $_SESSION['data'] =$_REQUEST;
    $_SESSION['errors'] =$errors;
    //REDIRECTION
    header("location: ../index.php");

}
else{
 $query="INSERT INTO posts(title,details, author) VALUES ('$title','$details','$author')";
 $res=mysqli_query($conn,$query);
  if($res){
    $_SESSION['msg']="my data has been inserted.";
      header("Location: ../index.php");
  }

}
?>
