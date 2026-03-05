var btnaddProduct = document.querySelector(".btn-add");
if (btnaddProduct) {
  btnaddProduct.addEventListener("click", function () {
    window.location.href = "product_add.php";
  });
}
var btnProduct = document.querySelector(".btn-products");
if (btnProduct) {
  btnProduct.addEventListener("click", function () {
    window.location.href = "products.php";
  });
}
