<?php  
	// Lấy ra sản phẩm hot
	function getProHot(){
		global $conn;
		$sql = "SELECT *FROM tbl_product WHERE stt = 2 LIMIT 0,8";
		$query = mysqli_query($conn, $sql);
		$result = array();

		while ($row = mysqli_fetch_assoc($query)) {
			$result[] = $row;
		}

		return $result;
	}

	// Lấy ra thông tin sản phẩm khách hàng muốn mua
	function getPro_id($id){
		global $conn;
		$sql = "SELECT *FROM tbl_product WHERE id = $id";
		$query = mysqli_query($conn, $sql);
		$result = mysqli_fetch_assoc($query);
		return $result;
	}

	// Thêm thông tin khách hàng mua hàng
	function addMember_order($name_member, $phone_member, $addres, $email_member, $passw){
		global $conn;
		$sql = "INSERT INTO tbl_member(name_member, phone_member, addres, email_member, passw) VALUES('$name_member', '$phone_member', '$addres', '$email_member', '$passw')";
		return mysqli_query($conn, $sql);
	}

	// Thêm mới đơn hàng khách hàng mua
	function addOrder($id_member,$note){
		global $conn;
		$sql = "INSERT INTO tbl_order(id_member, note) VALUES($id_member, '$note')";
		return mysqli_query($conn, $sql);
	}

	// Thêm mới sản phẩm khách hàng muốn mua
	function addProduct_order($id_order, $id_product, $quantity, $price, $total){
		global $conn;

		$sql = "INSERT INTO tbl_detail_order(id_order, id_product, quantity, price, total) VALUES($id_order, $id_product, $quantity, $price, $total)";
		return mysqli_query($conn, $sql);

	}

?>