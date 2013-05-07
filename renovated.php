<?php include("include/loginheader.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include("include/header.php"); ?>
  <script type="text/javascript">
  $(document).ready(function() {
    $.getJSON('p.json',function(data){
      $('#content').empty();
      $.each(data, function(entryIndex, entry){
      var property = $('<div>').addClass('row-fluid propertycss');
      var info = $('<div>').addClass('span6 infocss'); 
      var name = $('<div>').attr('id', 'name').html("<b>Property Name: </b>"+entry['Name']);
      var address = $('<div>').attr('id', 'p_address').html("<b>Address: </b>"+entry['Address']);
      var beds = $('<div>').attr('id', 'p_beds').html("<b>Beds: </b>"+entry['Beds']);
      var price = $('<div>').attr('id', 'p_price').html("<b>Price: </b>"+entry['Price']);
      var size = $('<div>').attr('id', 'p_size').html("<b>Size: </b>"+entry['Size']);
      var lotsize = $('<div>').attr('id', 'p_lotsize').html("<b>Lot Size: </b>"+entry['LotSize']);
      info.append(name);
      info.append(address);
      info.append(beds);
      info.append(price);
      info.append(size);
      info.append(lotsize);
      var picture = $('<div>').addClass('span6 picture1css');
      picture.append($('<img>').attr('src',entry['Pic']));
      property.append(info);     
      property.append(picture);
      $('#content').append(property)
      console.log("HAY");
      });              
    });
    return false;
  });
  </script>
  </head>

  <body>

    <div class="container">
     <?php include("include/navbar.php"); ?>
    </div>
    <!-- Example row of columns -->
      <div class="featured">
        <h2>Recently Renovated </h2>
        <p>Below are some of the houses we have worked on in the past.  They will give you an idea of the quality you can expect with Knabe Properties.</p>
      </div>


    

      <div class="row-fluid">
        <div id="content" class="span10 offset1">
        </div>
      </div>

      <hr>


      <?php include("include/footer.php"); ?>


    </div> <!-- /container -->

  </body>
