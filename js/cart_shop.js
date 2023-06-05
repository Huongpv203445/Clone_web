function displayCartItems() {
    var cartItems = getCartItems(); // Hàm này cần được cung cấp bên ngoài, lấy danh sách các sản phẩm trong giỏ hàng

    var cartTable = document.getElementById("cart-items");
    cartTable.innerHTML = ""; // Xóa hết các mục cũ trong giỏ hàng

    for (var i = 0; i < cartItems.length; i++) {
        var item = cartItems[i];
        var row = document.createElement("tr");

        var productCell = document.createElement("td");
        productCell.innerHTML = item.product.name;
        row.appendChild(productCell);

        var quantityCell = document.createElement("td");
        quantityCell.innerHTML = item.quantity;
        row.appendChild(quantityCell);

        var actionCell = document.createElement("td");
        var removeButton = document.createElement("button");
        removeButton.innerHTML = "Xóa";
        removeButton.setAttribute("data-product-id", item.product.id);
        removeButton.addEventListener("click", removeCartItem);
        actionCell.appendChild(removeButton);
        row.appendChild(actionCell);

        cartTable.appendChild(row);
    }
}

// Hàm để cập nhật tổng số lượng và tổng giá trị của giỏ hàng
function updateCartSummary() {
    var totalQuantity = getTotalQuantity(); // Hàm này cần được cung cấp bên ngoài, lấy tổng số lượng sản phẩm trong giỏ hàng
    var totalPrice = getTotalPrice(); // Hàm này cần được cung cấp bên ngoài, tính tổng giá trị của giỏ hàng

    document.getElementById("total-quantity").innerHTML = totalQuantity;
    document.getElementById("total-price").innerHTML = totalPrice;
}

// Hàm để xử lý sự kiện khi người dùng nhấp vào nút "Xóa"
function removeCartItem(event) {
    var productId = event.target.getAttribute("data-product-id");
    removeFromCart(productId); // Hàm này cần được cung cấp bên ngoài, xóa một sản phẩm khỏi giỏ hàng

    displayCartItems(); // Cập nhật lại danh sách giỏ hàng
    updateCartSummary(); // Cập nhật lại tổng số lượng và tổng giá trị
}

// Khi tải xong trang, hiển thị giỏ hàng và cập nhật tổng số lượng và tổng giá trị
window.addEventListener("load", function() {
    displayCartItems();
    updateCartSummary();
});

 

 
  var myLink = document.getElementById("myLink");


  myLink.onclick = function() {
    alert("You clicked the link!");
  };
  