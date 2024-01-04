<?php
 session_start();
 include "./database/env.php";
 $query="SELECT * FROM posts";
 $res=mysqli_query($conn,$query);
 $posts=mysqli_fetch_all($res,1);
 //var_dump($res);
//var_dump($query);
//var_dump($posts);
//echo "<pre>";
//print_r(count($posts));
//var_dump($posts);
//echo "</pre>";
//exit();
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
<div class="card col-lg-8 mx-auto mt-3">
    <div class="card-header">all post</div>
    <div class="card-body">
         
     <table class="table">
            <tr>
                <th>#</th>
                <th>AUTHOR</th>
                <th>TITLE</th>
                <th>DETAILS</th>
                <th></th>
            </tr>

            <?php
            if(count($posts)>0){
            foreach($posts as $key=>$post){
            ?>    
              <!--  <tr>
                <td><//?= ++$key ?></td>
                <td><//?= $post['author'] ?></td>
                <td><//?= $post['title'] ?></td>
                <td><//?= $post['details'] ?></td>
               </tr>-->
               <tr>
                <td><?= ++$key ?></td>
                <td>
                     <img style="width: 40px; height:40px; border-radius: 50%;object-fit:cover;" src="https://api.dicebear.com/7.x/initials/svg?seed=<?= $post['author'] ?>" alt=""> <?= $post['author'] ?>       
            </td>
                <td><?= $post['title'] ?></td>
                <td><?= strlen($post['details']) > 15 ? substr($post['details'],0,15). "..." : $post['details']  ?></td>
                   <td>
                        <div class="btn-group">
                        <a href="./showpost.php?id=<?= $post['id'] ?>" class="bg-warning btn-sm" style="padding:5px; text-decoration:none; color: purple; font-weight:bold; border-radius:8px; margin:5px;">show</a>
                             <a href="./editpost.php?post_id=<?= $post['id'] ?>" class="bg-primary btn-sm" style="padding:5px; text-decoration:none; color: purple; font-weight:bold; border-radius:8px;margin:5px;">edit</a>
                             <a href="#" class="bg-danger btn-sm" style="padding:5px; text-decoration:none; color: purple; font-weight:bold; border-radius:8px;margin:5px;">delete</a>
                        </div>
                   </td>
               </tr>
            <?php   
            }
        }else{

       
            ?>
            
            <tr>
                <td  colspan="5" class="text-center"><h5>no post found😔</h5></td>
            </tr>
          <?php
          }
          ?>
     </table>

    </div>
</div>
<!--//USER FORM SECTION END-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
  session_unset();
?>
