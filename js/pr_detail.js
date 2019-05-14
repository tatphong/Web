function show_pr_detail(masp, tensp, gia, img, admin, cater) {
	'use strict';
	var a = document.getElementById('show_pr_detail');
	var btn_edit_del=""; //check ad or user interface
	if (admin){ 
		btn_edit_del=`<form method="get" action="product.php">
							<i class="fas fa-edit" title="Edit"></i>
							<input type="text" name="del_target" value="${masp}" style="display: none"/>
							<input type="text" name="cater_id_submit" value="${cater}" style="display: none"/>
							<button type="submit" name="btn_del" onClick="if(confirm('Are you sure to delete!')) this.setAttribute('type','submit'); else this.setAttribute('type','button');"><i class="fas fa-trash-alt" title="Delete"></i>
						</form>`;
	}
	a.innerHTML =`<div class="col-lg-5 col-md-5 col-6 inner-pr inner-pr-mob">
					
					<img src="${img}" class="inner-pr-img">
				</div>
				<div class="d-block d-md-none col-6 inner-pr inner-pr-mob">
					<img src="hinh/DRESSING IN THE KNOWLEDGE.jpg" class="inner-pr-img d-md-none d-block">
				</div>

				<div class="col-lg-7 col-md-7 col-12 inner-pr name-pr">
					
					<div class="col-lg-12 col-md-12 tensanpham">
						<h3>${tensp}</h3>
						<h4>
							<font color="#c77000">$ ${gia}</font>
							<i class="fas fa-shopping-bag" title="Add to cart"></i>
							${btn_edit_del}
						</h4>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="col-6">COLOR:</div>
							<div class="col-6"> Beige</div>
						</div>
						<div class="row">
							<div class="col-6">MATERIAL:</div>
							<div class="col-6"> Leather</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-7 size"> SIZE </div>
							<div class="col-lg-6 col-5 dropdown">
								<select>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
									<option value="XXL">XXL</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="col-lg-6 col-7 quantity"> QUANTITY: </div>
							<div class="col-lg-6 col-5 dropdown">
								<select id="${masp}">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<button class="add-pr col-lg-10 d-none d-lg-block" onClick="add_cart('${masp}','${tensp}','${gia}','${img}')">ADD TO CART</button>
					</div>
				</div>`;

	$('#hide').removeClass('hidden');
	$('.inner-overlay').click(function () {
		$('#hide').addClass('hidden');
	});
}

function add_cart(masp, tensp, gia, img) {
	'use strict';
	var stt = 0;
	var pr_array = JSON.parse(localStorage.getItem('cart'));
	var quantity = parseInt(document.getElementById(masp).value);

	if (pr_array == undefined) {
		pr_array = new Array();
		pr_array[0] = new Array(parseInt(masp), tensp, parseInt(gia), img, quantity);
	} else {
		for (var i = 0; i < pr_array.length; i++) {
			if (pr_array[i][0] == masp) {
				pr_array[i][4] += quantity;
				stt = 1;
				break;
			}
		}
		if (stt != 1) {
			var new_pr = new Array(parseInt(masp), tensp, parseInt(gia), img, quantity);
			pr_array.push(new_pr);
		}
	}
	localStorage.setItem('cart', JSON.stringify(pr_array));
	alert('ADD SUCCESS');
}

