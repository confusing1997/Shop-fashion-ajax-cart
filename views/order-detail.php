<div class="container shopping-cart">
  <?php  
    $_SESSION['sum_price'] = 0;
    if (isset($_SESSION['carts']) && !empty($_SESSION['carts'])) {
  ?>
  <div class="row">
    <h3 class="title">
      Giỏ hàng <span style="color: red;" id="notiCart"></span>
    </h3>
    <div class="col-md-12 table-cart">
      <div class="clearfix">
      </div>
      <form action="index.php?page=update-cart" method="POST">
        <table class="shop-table dataCart" id="dataCart">
          <thead>
            <tr>
              <th>
                Hình ảnh
              </th>
              <th>
                Chi tiết
              </th>
              <th>
                Giá tiền(VNĐ)
              </th>
              <th>
                Số lượng
              </th>
              <th>
                Tổng tiền
              </th>
              <th>
                Thao tác
              </th>
            </tr>
          </thead>
          <tbody>
            <?php 
                foreach ($_SESSION['carts'] as $key => $value) {
            ?>
                <tr>
                  <td>
                    <img src="images/products/<?php echo $value['img']; ?>" alt="">
                  </td>
                  <td>
                    <div class="shop-details">
                      <div class="productname">
                        <?php echo $value['name']; ?>
                      </div>
                      <p>
                        <img alt="" src="images/star.png">
                        <a class="review_num" href="#">
                          05 Review(s)
                        </a>
                      </p>
                    </div>
                  </td>
                  <td>
                    <h5>
                      <?php echo number_format($value['price']); ?>
                    </h5>
                  </td>
                  <td>
                    <input onchange="updateCart(<?php echo $value['id']; ?>)" type="number" name="<?php echo $value['id']; ?>" value="<?php echo $value['qty']; ?>" min="1" max="5" id="qty_<?php echo $value['id']; ?>" />
                  </td>
                  <td>
                    <h5>
                      <strong class="red">
                        <?php  
                          $item_sum = $value['price'] * $value['qty'];
                          $_SESSION['sum_price'] += $item_sum;
                          echo number_format($item_sum);
                        ?>
                      </strong>
                    </h5>
                  </td>
                  <td>
                    <a onclick="return confirm('Bạn có muốn xóa sản phẩm khỏi giỏ hàng không? ');" href="index.php?page=delete-cart&id=<?php echo $value['id']; ?>">
                      <img src="images/remove.png" alt="">
                    </a>
                    <button class="btn btn-danger delCart" value="<?php echo $value['id']; ?>">
                      Xóa
                    </button>
                  </td>
                </tr>
            <?php
              }
            ?>
            
          </tbody>
          <tfoot>
            <tr>
              <td colspan="6">
                <button class="pull-left">
                  Tiếp tục mua hàng
                </button>
                <button class="pull-right" name="submit_cart" type="submit">
                  Xác nhận
                </button>
              </td>
            </tr>
          </tfoot>
        </table>
      </form>

      <div class="clearfix">
      </div>
      <div class="col-md-8 col-sm-6"></div>
      <div class="col-md-4 col-sm-6 dataCart">
        <div class="shippingbox">
          <div class="grandtotal">
            <h5>
              Tổng tiền
            </h5>
            <span>
              <?php echo number_format($_SESSION['sum_price']); ?>
            </span>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="shippingbox">
              <h5>
                ĐẶT hàng
              </h5>
              <form action="index.php?page=ordered" method="POST" name="">
                <label for="name">Họ tên</label>
                <input type="text" name="name" id="name" placeholder="Nhập họ tên..." required="" />

                <label for="phone">Số điện thoại</label>
                <input type="number" name="phone" id="phone" required="" />

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required="" />

                <label for="addres">Địa chỉ nhận hàng</label>
                <input type="text" name="addres" id="addres" required="" /> 

                <label for="note">Ghi chú đơn hàng</label>
                <textarea rows="10" cols="30" name="note" class="form-control"></textarea>

                <button type="submit" name="order" style="margin-top: 30px;">
                  Đặt hàng
                </button>
                </div>
                
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="our-brand">
      <h3 class="title">
        <strong>
          Our 
        </strong>
        Brands
      </h3>
      <div class="control">
        <a id="prev_brand" class="prev" href="#">
          &lt;
        </a>
        <a id="next_brand" class="next" href="#">
          &gt;
        </a>
      </div>
      <ul id="braldLogo">
        <li>
          <ul class="brand_item">
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/envato.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/themeforest.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/photodune.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/activeden.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/envato.png" alt="">
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <ul class="brand_item">
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/envato.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/themeforest.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/photodune.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/activeden.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/envato.png" alt="">
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul> 
    </div>
  <?php }
  else{
?>
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Thông báo!</strong> Giỏ hàng trống <a href="index.php"><button class="btn btn-danger">Tiếp tục mua hàng</button></a>
    </div>
<?php
  } 
  ?>
</div>