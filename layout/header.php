<div class="header">
   <div class="container">
      <div class="row">

         <div class="col-md-2 col-sm-2">
            <div class="logo"><a href="index.php"><img src="images/logo.png" alt="FlatShop"></a></div>
         </div>

         <div class="col-md-10 col-sm-10">

            <div class="clearfix"></div>
            
            <div class="header_bottom">

               <ul class="option">

                  <li id="search" class="search">
                     <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                  </li>

                  <li class="option-cart">
                     <a href="index.php?page=order-detail" class="cart-icon">cart 

                        <span class="cart_no">

                           <?php if (isset($_SESSION['carts']) && !empty($_SESSION['carts'])) {
                           echo array_sum(array_column($_SESSION['carts'], 'qty'));
                           }?>

                        </span></a>

                     <ul class="option-cart-item"> 

                        <?php
                              $_SESSION['sum_quantity'] = 0;   
                              $_SESSION['sum_price'] = 0;
                              if (isset($_SESSION['carts']) && !empty($_SESSION['carts'])) {

                              foreach ($_SESSION['carts'] as $key => $value) {
                        ?>

                        <li>
                           <div class="cart-item">
                              <div class="image">
                                 <img src="images/products/<?= $value['img'] ?>" alt="">
                              </div>

                              <div class="item-description">
                                 <p class="name"><?= $value['name'] ?></p>
                                 <p>
                                    Size: <span class="light-red">One size</span><br>
                                    Quantity: <span class="light-red"><?= $value['qty'] ?></span></p>
                              </div>
                              <div class="right">
                                 <p class="price">
                                    <?php
                                       $items_sum = $value['price'] * $value['qty'] / 1000;
                                       $_SESSION['sum_price'] += $items_sum;
                                       $_SESSION['sum_quantity'] += $value['qty'];
                                       echo number_format($items_sum);
                                    ?>
                                 </p>
                                 <a onclick="return confirm('Bạn có muốn xóa sản phẩm này?');" 
                                 href="index.php?page=delete-product&id=<?= $value['id'] ?>" 
                                 class="remove"><img src="images/remove.png" alt="remove"></a>
                              </div>
                           </div>
                        </li>
                        
                        <?php
                           }
                        } 
                     ?>
                        <li>
                           <span class="total">Tổng <strong><?= number_format($_SESSION['sum_price']) ?></strong></span>
                           <button class="checkout" onClick="location.href='checkout.html'">CheckOut</button>
                        </li>
                     </ul>
                  </li>
               </ul>

               <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
               <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                     <li class="active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        <div class="dropdown-menu">
                           <ul class="mega-menu-links">
                              <li><a href="index.html">home</a></li>
                              <li><a href="home2.html">home2</a></li>
                              <li><a href="home3.html">home3</a></li>
                              <li><a href="productlitst.html">Productlitst</a></li>
                              <li><a href="productgird.html">Productgird</a></li>
                              <li><a href="details.html">Details</a></li>
                              <li><a href="cart.html">Cart</a></li>
                              <li><a href="checkout.html">CheckOut</a></li>
                              <li><a href="checkout2.html">CheckOut2</a></li>
                              <li><a href="contact.html">contact</a></li>
                           </ul>
                        </div>
                     </li>
                     <li><a href="productgird.html">men</a></li>
                     <li><a href="productlitst.html">women</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                        <div class="dropdown-menu mega-menu">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <ul class="mega-menu-links">
                                    <li><a href="productgird.html">New Collection</a></li>
                                    <li><a href="productgird.html">Shirts & tops</a></li>
                                    <li><a href="productgird.html">Laptop & Brie</a></li>
                                    <li><a href="productgird.html">Dresses</a></li>
                                    <li><a href="productgird.html">Blazers & Jackets</a></li>
                                    <li><a href="productgird.html">Shoulder Bags</a></li>
                                 </ul>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <ul class="mega-menu-links">
                                    <li><a href="productgird.html">New Collection</a></li>
                                    <li><a href="productgird.html">Shirts & tops</a></li>
                                    <li><a href="productgird.html">Laptop & Brie</a></li>
                                    <li><a href="productgird.html">Dresses</a></li>
                                    <li><a href="productgird.html">Blazers & Jackets</a></li>
                                    <li><a href="productgird.html">Shoulder Bags</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li><a href="productgird.html">gift</a></li>
                     <li><a href="productgird.html">kids</a></li>
                     <li><a href="productgird.html">blog</a></li>
                     <li><a href="productgird.html">jewelry</a></li>
                     <li><a href="contact.html">contact us</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>