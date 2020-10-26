<?php
	session_start();

	if (isset($_POST['id'])) {
		$id = (int)$_POST['id'];
		
		if (isset($_SESSION['carts']) && array_key_exists($id, $_SESSION['carts']) ) {
			unset($_SESSION['carts'][$id]);
			echo "Xóa thành công!";
		}
		

	}
	

?>