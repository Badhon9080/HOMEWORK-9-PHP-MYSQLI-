<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST REACTION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
     /*   print_r($_SESSION['errors']);*/

    ?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container"><a class="navbar-brand" href="#">POST REACTION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">add post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./allpost.php">all post</a>
        </li>
       
      </ul>
    <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>
<!--USER FORM SECTION START-->
<div class="card col-lg-6 mx-auto mt-3">
    <div class="card-header">add post</div>
    <div class="card-body">
        <form action="./contorller/stoRe.php" method="GET">
              <input value="<?= $_SESSION['data']['title'] ?? ''  ?>"  name="title" type="text" placeholder="post title" class="form-control"> 
              <?php 
                  if(isset($_SESSION['errors']["title_error"])){

                  ?>  
                    <span class="text-danger">
                        <?= $_SESSION['errors']["title_error"]; ?>
               </span>
               <?php
                  }
                  ?>
             <textarea  name="details" class="form-control my-3" placeholder="post-details"><?= $_SESSION['data']['details'] ?? ''  ?></textarea>
              <?php 
                  if(isset($_SESSION['errors']["detail_error"])){

                  ?>  
                    <span class="text-danger">
                        <?= $_SESSION['errors']["detail_error"]; ?>
               </span>
               <?php
                  }
                  ?>
                  <?php
               
               //  echo $_SESSION['errors']["detail_error"];
               ?> 
               
              
              <input value="<?= $_SESSION['data']['author'] ?? ''  ?>" name="author" type="text" placeholder="post author" class="form-control"> 
              <button type="submit" class="btn btn-primary mt-5">submit</button></br>
              <span class="text-success">
              <?= isset($_SESSION['msg']) ? $_SESSION['msg']  : '' ?>
              </span>
        </form>
    </div>
</div>
<!--//USER FORM SECTION END-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
  session_unset();
?>
