$(document).on('click', '.delCart', function(e){

	e.preventDefault();
	var id = $(this).val();
	var check = confirm('Bạn có muốn xóa sản phẩm khỏi giỏ hàng không? ');

	if (check == true) {
		$.post('server/delCart.php', {id : id}, function(data) {
			$("#notiCart").html(data);
			$(".table-cart").load(' #dataCart');
		});
	}

});

function updateCart(id){
	var qty = $("#qty_" + id).val();
	if (qty > 0) {
		$.ajax({
			url: 'server/updateCart.php',
			type: 'POST',
			dataType: 'html',
			data: {id : id, qty : qty},

			success : function(data){
				$("#notiCart").html(data);
				$(".table-cart").load(' .dataCart');
			},

			error : function(){
				console.log('error');
			}

		})
	}else{
		
	}
	
}