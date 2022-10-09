/* Search bar */
const searchFocus = document.getElementById('search-focus');
const keys = [
  { keyCode: 'AltLeft', isTriggered: false },
  { keyCode: 'ControlLeft', isTriggered: false },
];

window.addEventListener('keydown', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = true;
    }
  });

  const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

  if (shortcutTriggered) {
    searchFocus.focus();
  }
});

window.addEventListener('keyup', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = false;
    }
  });
});

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
   for (var i = 0; i < addCard.length; i++) {
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
   var title = shopProduct.getElementsByClassName("card-title")[0].innerText;
   var price = shopProduct.getElementsByClassName("price")[0].innerText;
   var productImg = shopProduct.getElementsByClassName("card-img-top")[0].src;
   addProductToCard(title, price, productImg);
   updateTotal(); 
}

function addProductToCard(title, price, productImg) {
   var cardBox = document.createElement("div");
   cardBox.classList.add("product-box");
   var cardItems = document.getElementsByClassName("card-content")[0];
   var cardItemsName = cardItems.getElementsByClassName("card-title");
   for (var i = 0; i < cardItemsName.length; i++) {
      if(cardItemsName[i].innerText == title){
         alert("You have already add this item to card");
         return;
      }
   }
   var cardBoxContent = `
                     <div class="row g-0 card-box">
                        <div class="col-md-3">
                           <img src="${productImg}" class="img-fluid rounded-start" 
                           alt="..." style="width: 72px;">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body" style="margin-left: 2px; margin-top: -10px;">
                              <h4 class="card-title">${title}</h4>
                              <h5 class="card-price">${price}</h5>
                              <input type="number" value="1" class="card-quantity">
                           </div>
                        </div>
                        <!-- Remove Card -->
                        <i class="fa-solid fa-trash remove-card"></i> 
                     </div> `;
cardBox.innerHTML = cardBoxContent;
cardItems.append(cardBox);
cardBox.getElementsByClassName("remove-card")[0].addEventListener("click", removeCard);
cardBox.getElementsByClassName("card-quantity")[0].addEventListener("change", quantityChange);
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
