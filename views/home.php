<?php  
   $rsHot = getProHot(); // Lấy ra sản phẩm HOT

   if (isset($_SESSION['noti_cart']) && $_SESSION['noti_cart'] == 1) {
?>
   <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Thông báo!</strong> Sản phẩm đã được thêm vào giỏ hàng 
      <a href="index.php?page=order-detail"><button class="btn btn-danger">Xem chi tiết</button></a>
   </div>
<?php
   unset($_SESSION['noti_cart']); 
   }
?>



<div class="hot-products">
   <h3 class="title"><strong>Hot</strong> Products</h3>
   <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
   <ul id="hot">
      <li>
         <div class="row">
            <?php  
               foreach ($rsHot as $keyHot => $valueHot) {
           ?>
               <div class="col-md-3 col-sm-6">
                  <div class="products">

                     <div class="offer">HOT</div>

                     <div class="thumbnail">
                        <a href="index.php?page=detail-product">
                           <img src="images/products/<?php echo $valueHot['img']; ?>" alt="Product Name">
                        </a>
                     </div>
                     
                     <div class="productname"><?php echo $valueHot['name']; ?></div>
                     <h4 class="price"><?= number_format($valueHot['price']); ?></h4>

                     <div class="button_group">
                        <a href="index.php?page=order&id=<?php  echo $valueHot['id']; ?>">
                           <button class="button add-cart" type="button">Thêm vào giỏ</button>
                        </a>
                        <button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                     </div>
                  </div>
               </div>
           <?php
               }
            ?>
            
         </div>
      </li>
   </ul>
</div>

<div class="clearfix"></div>
<!--
<div class="featured-products">
   <h3 class="title"><strong>Featured </strong> Products</h3>
   <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
   <ul id="featured">
      <li>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-05.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-06.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="offer">New</div>
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-07.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
         </div>
      </li>
      <li>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-01.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="products">
                  <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                  <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                  <h4 class="price">$451.00</h4>
                  <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
            </div>
         </div>
      </li>
   </ul>
</div> -->
<div class="clearfix"></div>
