<?php 
  $sql= "SELECT * FROM categories WHERE parent = 0";
  $parentquery = $db->query($sql);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Electro Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <?php while ($parent=mysqli_fetch_assoc($parentquery)) :?>
            <?php 
              $parent_id = $parent['id']; 
              $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
              $childquery = $db->query($sql2);
            ?>
            <!--menu items-->
            <li class="nav-item dropdown ml-auto">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $parent['category']; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <?php while($child = mysqli_fetch_assoc($childquery)): ?>
                  <a class="dropdown-item" href="#"><?php echo $child['category']; ?></a>
                <?php endwhile; ?>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
        <div class="nav-item dropdown ml-auto">
          <a href="#" class="dropdown-item" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="login.php">Sign In</a>
              <a class="dropdown-item" href="signup.php">Sign Up</a>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
        </div>
      </div>
    </nav>