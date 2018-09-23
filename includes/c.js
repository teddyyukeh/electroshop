var data ={"id" : id};
        jQuery.ajax({
          url: <?=BASEURL;?>+'includes/detailsmodal.php',
          method : "post",
          data : data,
          success: function(data){
            jQuery('body').append(data);
            jQuery('#details-modal').modal('toogle');
          },
          error: function(){
            alert("whoops! something went wrong");
          }
        });