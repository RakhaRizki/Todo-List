<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CDN Fontawesome -->
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>

  </head>

  <?php
  include('config.php');
  $ID = $_GET['ID'];

  $getdata = mysqli_query($connect, "SELECT * FROM list WHERE ID='$ID'");
  $row = mysqli_fetch_array($getdata);  
  ?>

  <body>    

<!-- Head -->

       <div class="container">
          <h1 class="my-5"><i class="fa-solid fa-list-check"></i> Edit</h1>

<!-- Card -->
     <div class="card">
       <div class="card-body">
        <form class="d-flex" action="editdata.php" method="post">
         <input class="form-control me-2 border-success" name="Data"
         value=" <?php echo $row['Data']?> " type="text" 

          placeholder="Ubah" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">
          <i class="fa-sharp fa-solid fa-circle-plus"></i>
           </button>

           <input type="hidden" value="<?php echo $row ['ID'] ?>" name="ID">

         </form>
       </div>
     </div>
   </div>
</body>

