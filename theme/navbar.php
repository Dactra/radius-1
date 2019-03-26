<!-- start body --> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">System Authen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($menu == "home") echo "active";?>" >
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if($menu == "user") echo "active";?>">
        <a href="user_main.php" class="nav-link" >User</a>
      </li>
       <li class="nav-item <?php if($menu == "group") echo "active";?>">
        <a href="group_main.php" class="nav-link" >Group</a>
      </li>
       <li class="nav-item <?php if($menu == "logacct") echo "active";?>">
        <a href="log_acct.php" class="nav-link" >Log Acct</a>
      </li>
       <li class="nav-item <?php if($menu == "logauth") echo "active";?>">
        <a href="log_auth.php" class="nav-link" >Log Auth</a>
      </li>
      <li class="nav-item <?php if($menu == "admin") echo "active";?>">
        <a href="admin_main.php" class="nav-link" >admin</a>
      </li>
      
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
      <label ><?php echo $_SESSION['name'];?>   &nbsp;&nbsp; </label>
      <a href="logout.php"><button type="button" class="btn btn-warning">Logout</button></a>
    </form>
    
  </div>
</nav>