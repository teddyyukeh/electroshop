<!--footer-->
      <footer class="footer  footer-dark bg-dark text-center" id="footer">
        <div class="container">
          <span class="text-muted">&copy; Copyright 2018 Electro Shop .</span>
        </div>
      </footer>
    <!--footerends here-->

    <!-- Optional JavaScript -->

    <script>
      function detailsmodal(id){
        var data {"id" : id};
        jQuery.ajax({
          url: <? php echo BASEURL; ?>+'includes/details_modal.php',
          method : "POST",
          data  : data,
          success: function(data){
              jQuery('body').append(data);
              jQuery("#details-modal").modal(toggle);
          },
          error: function(){
            alert("whoops! something went wrong");
          }
        });  
      }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
