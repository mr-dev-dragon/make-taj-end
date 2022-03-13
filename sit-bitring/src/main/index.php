<div id="toast"></div>
<div id="toast-cart"></div>
<div class="containerc">



 <div class="card bg-dark text-white">
  <img src="https://www.ovsfashion.com/on/demandware.static/-/Sites/default/dw1f93cce3/15092021/Landing_Beauty_BRAND_DSK_03_1600.4a68d581.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    
 <img class="card-title " src="https://media.discordapp.net/attachments/948495404796895262/950774673921175652/logo2.png" alt="" width="30%" height="50" class="d-inline-block align-text-top">
  </div>
</div>

<!-- col-xs-12 col-sm-11 col-md-8 col-lg-4 col-xl-3  col-xxl-2 -->

  <hr>
  <br>
  <div class="row">
<?php 

       $result = $mysqli->query(" SELECT * FROM  `products` ");

 ?>
 

<?php while ($row = $result->fetch_assoc()): ?>

    
     
  
      






        <div class=" col-lg-3">
          <div class="card" style="width: 18rem;">
        <span id="heart" class="heart"><i onclick="wishList()" class="fas fa-heart"></i></span>
        <img height="300" src="<?php echo $row['image']; ?>"class="first-image">
        <center> <h1 id="titlel">    <?php echo $row['productName']; ?></h1>   </center>
        <div class="card-body">
          <a id='description' ><center> <?php echo $row['description']; ?></center></a>
          <hr>
          <form  action="">
              <input type="hidden" name="" value="<?php echo $row['productID']; ?>">
              <input type="hidden" name="" value="<?php echo $row['quantityInStock'] ;?>">
              <div class='d-flex item'>
                  <img style="visibility: hidden; position: absolute" height="300" src="<?php echo $row['image']; ?>"class="first-image">
                  <h4 class="card-title"><?php echo $row['unitPrice']; ?>$</h4>
                  <button class="add-to-cart" type="submit"><i class="bi  bi-plus-circle-dotted"></i> add to cart</button> 
               </div>
          </form>
        </div>
      </div>
      </div>
   


    <?php endwhile?>


    <script>
       

$('.add-to-cart').on('click', function (){
        var cart = $('.bi-cart3');
        var imgtodrag = $(this).parent('.item').find("img").eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
                .css({
                'opacity': '1',
                    'position': 'absolute',
                     'visibility': 'visible',
                    'height': '350px',
                    'width': '250px',
                    'z-index': '100'
            })
                .appendTo($('body'))
                .animate({
                'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
            }, 1500, 'easeInOutExpo');
            
            setTimeout(function () {
                cart.effect("", {
                      pieces:16


                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 5,
                    'height': 5
            }, function () {
                $(this).detach();
            });
          }
        } );
    
     
  </script>




   <?php include 'header.php' ?>

     


 
</div>


