<?php session_start();
if($_SESSION['status_login'] != 1){
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php">';
    exit();
}
include("connect.php");
$menu = "logauth";
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
 <div class="container">
  <br>
  <p class="text-center"><h1>Log Auth</h1></p>
  <br>
   <!-- table data -->
 <br>

    <table id="table_id" class="display">
    <thead>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>reply</th>
            <th>time</th>
            
            
        </tr>
    </thead>
    <tbody>
      <?php 
      $result = mysqli_query($con,'SELECT * FROM radpostauth');
       while($data = mysqli_fetch_assoc($result)){
        ?>
       
        <tr>
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['username'];?></td>
            <td><?php echo $data['reply'];?></td>
            <td><?php echo $data['authdate'];?></td>
            
        </tr>
        <?php 
      }
      ?>
       
    </tbody>
  </table>


    
    
 </div>



 <!-- end body -->
<?php include("theme/footer.php"); ?>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready( function () {
          $('#table_id').DataTable();
      } );
    </script>
   
  </body>
</html>