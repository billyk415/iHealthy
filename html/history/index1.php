 <?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> iHealthy </title>
  <link rel="stylesheet" href="main.css">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<body>


  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
            <?php    
              if(empty($_SESSION['uid']))
                {

                   echo '<a href="/login.php" class="button"><button type="submit">Log-in</button></a>
                   <a href="/register.php" class="button"><button type="submit">Sign-up</button></a>'; 
                }
                else
                {
                  echo '<a href="/history.php" class="button"><button type="submit">Search History</button></a>'; 
                }
                

            ?>
          <h1 class="display-4 text-white mt-5 mb-2">iHealthy</h1>
          <!-- <p class="lead mb-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus ab labore provident mollitia. Id assumenda voluptate earum corporis facere quibusdam quisquam iste ipsa cumque unde nisi, totam quas ipsam.</p>
        </div> -->
        <div class="topnav">
          <input id="search-field" type="text" placeholder="Search">
          <button type="submit"><img class="icon" src=img/icon.png></button>
        </div>

        <form action="upload_file.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file" id="file"><br>
          <input type="submit" name="submit" value="convert">
        </form>
      </div>
    </div>
  </header>

  <!-- Page Content -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
