<!DOCTYPE html>
<head>
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<!-- <link rel="stylesheet" href="dist/css/bootstrap.css"> -->
<link rel="stylesheet" href="../static/gfood.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</head>
<body>
<h1>Greek food expert</h1>
<h2>We will help to match best greek dishes with your food preferences</h2>
  <div class="form-group query">
          <label for="button">What kind of food do you like?</label>
          <button id="veg" type="submit" class='btn btn-success'>Veg</button>
          <button id="non-veg" type="submit" class='btn btn-success'>Non-Veg</button>
          <button id="All" type="submit" class='btn btn-success'>All</button>
          </div>
          </form>
    <div class="row">
        <div class="first meat">
   	    <p>Souvlaki <span class='meat'>non-veg</span><br /><small>(Lit: 'little skewer') Anything grilled on a skewer (lamb, chicken, pork, swordfish, shrimp). Most common is lamb, pork, and chicken, typically marinated in oil, salt, pepper, oregano and lemon. Also known as kalamaki (καλαμάκι). </small></p>
</div>
<div class="second meat">
  <!-- <img src="C:\greekfood\static\images\Musaka-meat.jpg"> -->
  <p>Moussaka <span class='meat'>non-veg</span><br /><small>Casserole made of (typically fried) aubergine, potato, and spiced minced meat. There are other, less common variations besides eggplant, such as zucchini.</small></p>
</div>
<div class="third herb">
  <p>Greek salad <span class='herb'>veg</span><br /><small>Greek salad consists of tomatoes, sliced cucumbers, onion, feta cheese, and olives (usually Kalamata olives), typically seasoned with salt and oregano, and dressed with olive oil. Sliced capsicum, usually green, is often added also.</small></p>
</div>
<div class="forth herb">
  <p>Yemista <span class='herb'>veg</span><br /><small>Baked stuffed vegetables. Usually tomatoes, peppers, or other vegetables such as potato and zucchini, hollowed out and baked with a rice and herb filling. Minced meat is also commonly used in the filling.</small></p>
</div> 
<div id='social-buttons'>
    <a class="btn btn-lg btn-twitter" href="https://twitter.com/hashtag/greekfood?lang=en" target="_blank">Twitter</a>
    <a class="btn btn-lg btn-Facebook" href="https://www.facebook.com/greekfood/" target="_blank">Facebook</a>
    <a class="btn btn-lg btn-pinterest" href="https://www.pinterest.co.uk/sue_nieciecki/g-r-e-e-k-f-o-o-d/">Pinterest</a>
    </div>

<script>
    $('.row').on('click', function() {
    	$(this).toggleClass('show-description');
    });
    $('#veg').on('click', function() {
      $(".meat").addClass("show");
      $(".herb").removeClass("show");
    });

    $('#non-veg').on('click', function() {
      $(".herb").addClass("show");
      $(".meat").removeClass("show");
    });

    $('#All').on('click', function() {
      $(".herb").removeClass("show");
      $(".meat").removeClass("show");
    });
</script>

</body>
