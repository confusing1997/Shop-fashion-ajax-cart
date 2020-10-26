<?php  
	if (isset($_POST['submit_cart'])) {
		unset($_POST['submit_cart']);

		if (isset($_SESSION['carts']) && !empty($_SESSION['carts'])){
			foreach ($_POST as $id => $qty) {
				if ($qty <= 0) {
					unset($_SESSION['carts'][$id]);
				}else{
					$_SESSION['carts'][$id]['qty'] = $qty;
					header("Location: index.php?page=order-detail");
				}
			}
		}else{
			header("Location: index.php?page=order-detail");
		}

	}
?>