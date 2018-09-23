<?php
  include ('server.php');
  require_once 'core/init.php';
  include 'includes/head.php';
  include 'includes/navigation.php';

  $sql = "SELECT * FROM products WHERE featured =1";
  $featured = $db->query($sql);
 ?>
  <body>
    
    <?php include 'includes/carousel.php' ?>

    <div class="container">
      

      <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
          <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
           ?>
        <?php endif ?>

        <?php if (isset($_SESSION['username'])): ?>
          <p class="lead text-center">welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
          <p><a href="index.php?logout='1'" style="color: red;">logout</a></p>
        <?php endif ?>
      </div>


      <? php include 'includes/sidebar.php'; ?>
      <!-- main content of featured products-->
        <div class="col-md-12">
          <h2 class="text-center">Featured Products</h2>
          <hr>
          
          <div class="row row-centered">
          <?php while($product = mysqli_fetch_assoc($featured)) :?>
            <div class="col-md-3">
                  <h5 class="card-title"><?php echo $product['title']; ?></h5>
                  <img class="card-img-top" src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                  <hr>
                  <p class=" list-price text-danger">list price: <s>$<?php echo $product['list_price']; ?></s></p>
                  <p class="price">our price: $<?php echo $product['price']; ?></p>
                  <button type="button" class="btn btn-success" onclick="detailsmodal(<?= $product['id']; ?>)">Details</button> 
            </div>
          <?php endwhile; ?>
          <br>
          </div>
        </div>
      </div>

    <?php  
      include 'includes/footer.php';
    ?>
