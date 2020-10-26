<?php  

	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];
		$row = getPro_id($id); // Lấy ra sản phẩm khách hàng muốn mua

		// $_SESSION['carts']; // biến lưu sản phẩm khách hàng muốn mua

		if (!isset($_SESSION['carts']) || empty($_SESSION['carts'])) {
			$_SESSION['carts'][$id] = $row;
			$_SESSION['carts'][$id]['qty'] = 1;
		}else{
			if (array_key_exists($id, $_SESSION['carts'])) {
				$_SESSION['carts'][$id]['qty'] += 1;
			}else{
				$_SESSION['carts'][$id] = $row;
				$_SESSION['carts'][$id]['qty'] = 1;
			}
		}
		$_SESSION['noti_cart'] = 1;
		// echo "<pre>";
		// print_r($_SESSION['carts']);
		// echo "</pre>";
	}
	
	header("Location: index.php");
	
	
?>