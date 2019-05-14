window.onload = function(e) {
  "use strict";
  //get choose pr
  var pr_array = JSON.parse(localStorage.getItem("cart"));
  var total = 0;
  if (pr_array == undefined) console.log("No item selected");
  else {
    for (var i = 0; i < pr_array.length; i++) {
      document.getElementById(
        "pr_array_content"
      ).innerHTML += `<div class="col-12 pr-us" id="${
        pr_array[i][0]
      }"><div class="col-md-1 d-none d-md-block d-lg-block decor"></div><div class="col-lg-2 col-md-3 col-12 img-3">
			<img src="${
        pr_array[i][3]
      }" class="img-fluid"></div><div class="offset-md-0 col-md-4 offset-1 col-11 pr-cart">
			<h4>${
        pr_array[i][1]
      }</h4> Brand : James Furlinn<br> Material: Linen<br> Color :  Blue<br> Discount:<font color="#c77000">None</font><br> 
			Size:<select><option>S</option><option>M</option><option>L</option><option>XL</option></select>     
			Quantity :<select id="quantity" onChange="total_price(this.value,'${
        pr_array[i][4]
      }','${pr_array[i][2]}')"><option>${
        pr_array[i][4]
      }</option><option>1</option><option>2</option></select><div class="col-2 d-block d-md-none price"><i class="fas fa-times" onClick="del_pr("${
        pr_array[i][0]
      }")"></i><i class="fas fa-info-circle"></i></div></div><div class="col-lg-2 col-md-3 col-12 cost">
			<h4 class="col-12">$ ${
        pr_array[i][2]
      }</h4><div class="col-md-12 d-md-block d-lg-none d-none price"><i class="fas fa-times" onClick="del_pr('${
        pr_array[i][0]
      }')"></i><i class="fas fa-info-circle"></i></div></div><div class="col-2 price d-lg-block d-md-none d-none">
      <i class="fas fa-times" onClick="del_pr('${
        pr_array[i][0]
      }')"></i><i class="fas fa-info-circle"></i></div><div class="col-md-1 d-none d-md-block d-lg-block decor"></div></div>`;
      total += pr_array[i][2] * pr_array[i][4];
    }
    document.getElementById("total").innerHTML = "$ " + total;
  }
};

function del_pr(id) {
  var pr_array = JSON.parse(localStorage.getItem("cart"));
  var total = document.getElementById("total").innerHTML;
  total = parseInt(total.split("$ ")[1]);

  //change total price
  for (var i = 0; i < pr_array.length; i++)
    if (pr_array[i][0] == parseInt(id))
      total -= pr_array[i][2] * pr_array[i][4];

  //del pr from array (replace pr_array by new array without del pr)
  pr_array = pr_array.filter(value => {
    return value[0] !== parseInt(id);
  });
  localStorage.setItem("cart", JSON.stringify(pr_array));

  document.getElementById(id).style.display = "none";

  document.getElementById("total").innerHTML = "$ " + total;
}

function total_price(new_quantity, old_quantity, price) {
  var total = document.getElementById("total").innerHTML;
  total = parseInt(total.split("$ ")[1]);
	total = total - old_quantity * price + new_quantity * price;
	document.getElementById("total").innerHTML = "$ " + total;
}
