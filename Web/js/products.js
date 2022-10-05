/* Card-shop */
var cardIcon = document.querySelector('.shop-btn');
var card = document.getElementById('card-shop');
var cardClose = document.getElementById('card-close');

function openCart() {
   card.style.right = 0;
}

function closeCart() {
   card.style.right = "-360px";
}


/* Card-shop working */
if (document.readyState == 'loading') {
   document.addEventListener("DOMContentLoaded", ready);
} else {
   ready();
}

/* Making Function */
function ready() {
   /* Remove items*/
   var removeCardButton = document.getElementsByClassName("remove-card");
   console.log(removeCardButton);
   for (var i = 0; i < removeCardButton.length; i++) {
      var button = removeCardButton[i];
      button.addEventListener('click', removeCard);
   }
   /* Quantity */
   var quantityInput = document.getElementsByClassName("card-quantity");
   for (var i = 0; i < quantityInput.length; i++) {
      var input = quantityInput[i];
      input.addEventListener("change", quantityChange);
   }
   /* Add Card */
   var addCard = document.getElementsByClassName("shop-card");
   for (var i = 0; i < addCard; i++) {
      var button = addCard[i];
      button.addEventListener("click", addCardClick);
   }
}
/* Remove items*/
function removeCard(event) {
   var buttonclick = event.target;
   buttonclick.parentElement.remove();
   updateTotal();
}

/* Quantity Changes */
function quantityChange(event) {
   var input = event.target;
   if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
   }
   updateTotal();
}
/* Add to Card */
function addCardClick(event) {
   var buttonclick = event.target;
   var shopProduct = buttonclick.parentElement.parentElement.parentElement;
   var title = shopProduct.getElementsByClassName("product-title")[0].innerText;
   var price = shopProduct.getElementsByClassName("price")[0].innerText;
   var productImg = shopProduct.getElementsByClassName("img-fluid")[0].src;
   console.log(title);
   /* addProductToCard(title, price, productImg);
   updateTotal(); */
}

function addProductToCard(title, price, productImg) {
   var cardBox = document.createElement("div");
   /* cardBox.classList.add("card-box"); */
   var cardItems = document.getElementsByClassName("card-content")[0];
   var cardItemsName = cardItems.getElementsByClassName("card-title");
   for (var i = 0; i < cardItemsName.length; i++) {
      alert("You have already add this item to card");
   }
}
/* Update Total */
function updateTotal() {
   var cardContent = document.getElementsByClassName("card-content")[0];
   var cardBox = document.getElementsByClassName("card-box");
   var total = 0;

   for (var i = 0; i < cardBox.length; i++) {
      var box = cardBox[i];
      var priceElement = box.getElementsByClassName("card-price")[0];
      var quantityElement = box.getElementsByClassName("card-quantity")[0];
      var price = parseFloat(priceElement.innerText.replace("$", ""));
      var quantity = quantityElement.value;
      total = total + (price * quantity);
      total = Math.round(total * 100) / 100;

      document.getElementsByClassName("total-price")[0].innerText = "$" + total;
   }
}
/* let navbar = document.querySelector('.header .navbar');
document.querySelector('#nav-close').onclick = () =>{
    navbar.classList.remove('active');
}
let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
searchForm.classList.add('active');
}

document.querySelector('#close-search').onclick = () =>{
  searchForm.classList.remove('active');
}

window.onscroll = () =>{
 nav.classList.remove('active');

if(window.scrollY > 0){
   document.querySelector('.nav').classList.add('active');
}else{
   document.querySelector('.nav').classList.remove('active');
    }
};

window.onload = () =>{
if(window.scrollY > 0){
   document.querySelector('.header').classList.add('active');
}else{
   document.querySelector('.header').classList.remove('active');
    }
}; */