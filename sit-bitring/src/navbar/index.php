


 <nav>
  <div class="container">
    <ul class="navbar-left">
     
       
   
     
    <li><a><img src="https://avatars.githubusercontent.com/u/71600486?s=400&u=6e5923e3de08a700ca4576b82297ac1aef4e2c02&v=4"class="rounded-circle"height="22"alt="profile picture"loading="lazy"/></a></li>
  
   <li class="cc"><a  href="#"><img src="https://media.discordapp.net/attachments/948495404796895262/950774673921175652/logo2.png" alt="" width="100%" height="30" class="d-inline-block align-text-top"></a></li>
    </ul> <!--end navbar-left -->

    <ul class="navbar-right">


     <li><a href="#" id="my">     <i width='100px' class="bi bi-heart"></i >   <span class="badge">4</span></a></li>
      <li><a href="#" id="cart">    <i class="bi bi-cart3"></i><span class="badge">3</span></a></li>
    </ul> <!--end navbar-right -->
  </div> 























  <!--end container -->
</nav>
<div class="container">
  <div class="shopping-cart">
    <div class="shopping-cart-header">
      
      <button type="button" class="btn btn-primary"><i class="bi bi-cart3"></i></button>
      <span class="badge">3</span>
      <div class="shopping-cart-total">
        <span class="lighter-text">Total:</span>
        <span class="main-color-text">$2,229.97</span>
      </div>
    </div> <!--end shopping-cart-header -->

    <ul class="shopping-cart-items ">
      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
        <span class="item-name">Sony DSC-RX100M III</span>
        <span class="item-price">$849.99</span>
        <input class="item-quantity" type="number" >
      </li>

      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1" />
        <span class="item-name">KS Automatic Mechanic...</span>
        <span class="item-price">$1,249.99</span>
        <input class="item-quantity" type="number" >
      </li>

      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1" />
        <span class="item-name">Kindle, 6" Glare-Free To...</span>
        <span class="item-price">$129.99</span>
        <input class="item-quantity" type="number">
      </li>
    </ul>
    <a type="button" href="#" class="button" name="buy">buy</a>
  </div> <!--end shopping-cart -->
</div> <!--end container -->
  <!--end container -->
</nav>


















































<div class="container">
  <div class="shopping-cartB">
    <div class="shopping-cart-headerB">
    
    
    
    <button type="button" class="btn btn-danger"><i class="bi bi-heart"></i></button>
  <span class="badgeB">3</span>
      <div class="shopping-cart-totalB">
        <span class="lighter-textB">all my fivrt</span>
     
      </div>
    </div> <!--end shopping-cart-header -->

    <ul class="shopping-cart-itemsB ">
      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
        <span class="item-nameB">Sony DSC-RX100M III</span>

          <span class="item-quantityB">discription</span>
      </li>

      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1" />
        <span class="item-nameB">KS Automatic Mechanic...</span>
        
        
        <span class="item-quantityB">discription</span>
      </li>

      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1" />
        <span class="item-nameB">Kindle, 6" Glare-Free To...</span>
      
         <span class="item-quantityB">discription</span>
      </li>

     
    </ul>

    <a href="#" class="button">add to card</a>
  </div> <!--end shopping-cart -->
</div> <!--end container -->




<script>
  (function(){
 
  $("#cart").on("click", function() {
    $(".shopping-cart").fadeToggle( "fast");
  });
  
})();

  (function(){
 

  $("#my").on("click", function() {
    $(".shopping-cartB").fadeToggle( "fast");
        
  });
  
})();
</script>











