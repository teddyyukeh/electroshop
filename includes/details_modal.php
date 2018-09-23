<!-- Modal -->
<? php ob_start(); ?>

<div class="modal fade" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="details-modal">Dell XPS 15 laptop</h5>
      </div>
      <section>
      	<div class="modal-body" id="Detail-modal">
          <div class="col-md-12">
        		<div class="card">
        			<div class="row row-centered">
        				<div class="col-md-6">
        					<div class="card-block">

        						<p class="card-text">Introducing the Dell XPS 15 laptop</p>
                    <p class="card-text">Pushing innovation to the edge. Designed to be the best.</p>
        						<p class="card-text">Price: $1699</p>
        						<p class="card-text">Brand: Dell</p>

                    <!--add to cart form-->
                    <form  action="add_cart.php" method="post">
                      <div class="form-group">
                        <div class="col-xs-3">
                          <label for="quantity" id="quantity-label">Quantity:ec
                            <input type="text" name="quantity" class="form-control" id="quantity"/>
                          </label>
                        </div>
                        <div class="form-group">
                          <label for="storage-size">Storage size:
                             <select class="form-control" id="storage-size" placeholder="storage size" name="storage-size">
                              <option value="#storage size"></option>
                              <option value="32">256GB</option>
                              <option value="64">500GB</option>
                              <option value="128">1TB</option>
                            </select>
                          </label>
                        </div>
                      </div>
                    </form>
        					</div>
        				</div>
                <div class="col-md-6">
                  <img class="card-img-bottom rounded float-left" id="img-modal" alt="dell" src="images/dell.jpg">
                  </div>
          			</div>
        			</div>
        		</div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> add to cart</button>
            <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
          </div>
      	</div>
      </section>
    </div>
  </div>
</div>

<? php echo ob_get_clean();  ?>