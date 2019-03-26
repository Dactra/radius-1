<?php session_start();
if($_SESSION['status_login'] != 1){
    echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php">';
    exit();
}
include("connect.php");
$menu = "group";
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
  <p class="text-center"><h1>Group User</h1></p>
  <br>
  <?php if($_GET['id'] == ""){ ?>
  <p class="text-center"><h3>Add Group</h3></p>
  <form method="POST" action="group_add_save.php">
      <div class="form-group">
        <label>Groupname</label>
        <input type="text" class="form-control" name="data[groupname]">
      </div>
       <div class="form-group">
        <label>attribute</label>
        <input type="text" class="form-control" name="data[attribute]">
      </div>
       <div class="form-group">
        <label>value</label>
        <input type="text" class="form-control" name="data[value]">
      </div>
      
      <button type="submit" class="btn btn-primary">save</button>
  </form>
<?php } ?>

<!--- edit -->
 <?php if($_GET['id'] != ""){ 

  $result = mysqli_query($con,"SELECT * FROM radgroupcheck WHERE id = '".$_GET['id']."'");
  $data = mysqli_fetch_assoc($result);


  ?>
  <p class="text-center"><h3>Add edit  id(<?php echo $data['id'];?>)</h3></p>
  <form method="POST" action="group_edit_save.php">
    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
      <div class="form-group">
        <label>Groupname</label>
        <input type="text" class="form-control" name="data[groupname]" value="<?php echo $data['groupname'];?>">
      </div>
       <div class="form-group">
        <label>attribute</label>
        <input type="text" class="form-control" name="data[attribute]" value="<?php echo $data['attribute'];?>">
      </div>
       <div class="form-group">
        <label>value</label>
        <input type="text" class="form-control" name="data[value]" value="<?php echo $data['value'];?>">
      </div>
      
      <button type="submit" class="btn btn-info">edit</button>
     <a href="group_main.php"> <button type="button" class="btn btn-primary">Add</button></a>
  </form>
<?php } ?>




<!-- table data -->
 <br>

    <table id="table_id" class="display">
    <thead>
        <tr>
            <th>id</th>
            <th>groupname</th>
            <th>attribute</th>
            <th>op</th>
            <th>value</th>
            <th>edit</th>
            <th>delete </th>
            
        </tr>
    </thead>
    <tbody>
      <?php 
      $result = mysqli_query($con,'SELECT * FROM radgroupcheck');
       while($data = mysqli_fetch_assoc($result)){
        ?>
       
        <tr>
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['groupname'];?></td>
            <td><?php echo $data['attribute'];?></td>
            <td><?php echo $data['op'];?></td>
            <td><?php echo $data['value'];?></td>
            <td>
              <a href="group_main.php?id=<?php echo $data['id'];?>" Onclick="return Confirmedit();">
                          <button type="button" class="btn btn-info">edit</button></a>
            </td>
            <td>
              <a href="group_delete.php?id=<?php echo $data['id'];?>" Onclick="return ConfirmDelete();">
                          <button type="button" class="btn btn-danger">delete</button></a>
            </td>
           

        </tr>
        <?php 
      }
      ?>
       
    </tbody>
  </table>

   


    
    
 </div>



 <!-- end body -->
<?php include("theme/footer.php"); ?>
   
    <!-- table js-->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready( function () {
          $('#table_id').DataTable();
      } );
    </script>

    <script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script>  


<script>
    function Confirmedit()
    {
      var x = confirm("Are you sure you want to edit?");
      if (x)
          return true;
      else
        return false;
    }
</script>  

  </body>
</html>