<?php  
	if (isset($_POST['order']) && isset($_SESSION['carts']) && !empty($_SESSION['carts'])) {
		$name 	= $_POST['name'];
		$phone  = $_POST['phone'];
		$email  = $_POST['email'];
		$addres = $_POST['addres'];
		$note   = $_POST['note'];
		$passw  = md5('shopwoo.com');

		// Thêm mới khách hàng mua hàng
		addMember_order($name, $phone, $addres, $email, $passw);
		$id_member = mysqli_insert_id($conn); // id mới nhất của khách hàng dc thêm vào tbl_member
		// Thêm mới đơn hàng khách hàng mua

		// Thêm mới đơn hàng khách mua
		addOrder($id_member, $note);
		$id_order = mysqli_insert_id($conn); // id đơn hàng mới nhất


		foreach ($_SESSION['carts'] as $key => $value) {
			$total = $value['qty'] * $value['price'];
			addProduct_order($id_order, $value['id'], $value['qty'], $value['price'], $total);
		}

		// Gửi mail cho khách hàng
		include_once 'PHPMailer/class.phpmailer.php';
		include_once 'PHPMailer/class.smtp.php';

		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
			$mail->CharSet = 'utf8';
		    //Server settings
		    $mail->SMTPDebug = 2;                      // Enable verbose debug output
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'ustyle95@gmail.com';                     // SMTP username
		    $mail->Password   = '';             // Nhập pass mail mọi người vào nhé
		    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		    //Recipients
		    $mail->setFrom('hotro@shopwoo.com', 'Thông báo!');
		    $mail->addAddress($email, $name);     // Add a recipient

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Thông báo đơn hàng!';
		    $mail->Body    = 'Nội dung khách hàng sẽ nhận được!';

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

		unset($_SESSION['carts']);
		echo "<script>alert('Đặt hàng thành công!');";
		echo "location.href=index.php;</script>";
	}	


?>