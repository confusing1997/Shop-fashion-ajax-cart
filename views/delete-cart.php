<?php  
	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];

		// echo "<pre>";
		// print_r($_SESSION['carts']);
		// echo "</pre>";

		if (isset($_SESSION['carts']) && !empty($_SESSION['carts'])) {
			unset($_SESSION['carts'][$id]); // Xóa sản phẩm ở vị trí id
			header("Location: index.php?page=order-detail");
		}

	}else{
		header("Location: index.php?page=order-detail");
	}

?>