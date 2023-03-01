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

  <body>    

<!-- Head -->

       <div class="container">
          <h1 class="my-5"><i class="fa-solid fa-list"></i> Todo List RKH</h1>

<!-- Card -->
     <div class="card">
       <div class="card-body">
        <form class="d-flex" action="insert.php" method="post">
         <input class="form-control me-2 border-success" name="Data" type="text" 

          placeholder="Apa Yang Mau Kamu Lakukan" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">
          <i class="fa-sharp fa-solid fa-circle-plus"></i>
          </button>
        </form>
      </div>
    </div>
<!-- End Card -->

<?php
include('config.php');
$alldata = mysqli_query($connect, "SELECT * FROM list");
?>

<!-- Table -->

<table class="table my-5">

  <tbody>
    <?php while ($row = mysqli_fetch_array($alldata)) { ?>
    <tr>
      <th scope="row"> <?php echo $row['ID'] ?> </th>
      <td> <?php echo $row['Data'] ?> </td>

      <td style="width: 5%">
      <a href="edit.php?ID= <?php echo $row['ID'] ?> " class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a>
      
      <td style="width: 5%">
      <a href="delete.php?ID= <?php echo $row['ID'] ?> "class="btn btn-outline-danger">
      <i class="fa-sharp fa-solid fa-square-minus"></i></a></td>
    </tr>

   <?php } ?>

  </tbody>
 </table>
</div>

    <!-- CDN Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </body>
</html>

