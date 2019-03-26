<?php session_start();
if($_SESSION['status_login'] != 1){
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php">';
    exit();
}
include("connect.php");
include("function.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin!</title>

  </head>
  <body>

  <?php include("theme/navbar.php"); ?>

 <!-- body main -->
 <div class="container" >
  <div class="jumbotron">
        <br>
        <p class="text-center"><h2> User all : <?php echo count_user();?></h2></p>
        <br>
        <p class="text-center"><h2> Group  : <?php echo count_groupname();?></h2></p>
        <br>

        <p class="text-center"><h2>คู่มือการใช้งาน</h2></p>
    

</div>
    
    
 </div>



 <!-- end body -->
<?php include("theme/footer.php"); ?>
   
  </body>
</html>