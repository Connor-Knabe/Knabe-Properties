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
      var name = $('<h5>').addClass('name').html("Property Name: "+entry['Name']);
      var address = $('<div>').addClass('p_address').html("Address: "+entry['Address']);
      var beds = $('<div>').addClass('p_beds').html("Beds: "+entry['Beds']);
      var price = $('<div>').addClass('p_price').html("Price: "+entry['Price']);
      var size = $('<div>').addClass('p_size').html("Size: "+entry['Size']);
      var lotsize = $('<div>').addClass('p_lotsize').html("Lot Size: "+entry['LotSize']);
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
</html>
