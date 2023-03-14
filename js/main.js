console.log("Running")

// STart of the reload to other pages
function myBout() {
    location.replace("/about.html")
}

function myClass() {
    location.replace("/class.php")
}

function myreg() {
  location.replace("/signup.html")
}

//Start for the read more page
function myMore() {
    document.getElementById("more").style.display = "block";
    document.getElementById("moreBtn").style.display = "none";
}

//Start of read less btn 
function myLess() {
    document.getElementById("more").style.display = "none";
    document.getElementById("lessBtn").style.display = "block";
}

// For my modal box
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// For the cart payment page
// detect card type based on card number
function detectCardType(cardNumber) {
  var visa = /^4[0-9]{12}(?:[0-9]{3})?$/;
  var mastercard = /^5[1-5][0-9]{14}$/;
  var amex = /^3[47][0-9]{13}$/;
  var discover = /^6(?:011|5[0-9]{2})[0-9]{12}$/;
  if (visa.test(cardNumber)) {
    return "Visa";
  } else if (mastercard.test(cardNumber)) {
    return "Mastercard";
  } else if (amex.test(cardNumber)) {
    return "American Express";
  } else if (discover.test(cardNumber)) {
    return "Discover";
  } else {
    return "";
  }
}

// detect card type on card number input change
var cardNumberInput = document.getElementById("card_number");
var cardTypeSpan = document.getElementById("card_type");
cardNumberInput.addEventListener("input", function() {
  var cardNumber = this.value;
  var cardType = detectCardType(cardNumber);
  cardTypeSpan.innerHTML = cardType;
});

// set expiration date to current month and year by default
var expirationDateInput = document.getElementById("expiration_date");
var currentDate = new Date();
var currentYear = currentDate.getFullYear();
var currentMonth = currentDate.getMonth() + 1;
if (currentMonth < 10) {
  currentMonth = "0" + currentMonth;
}
var defaultExpirationDate = currentYear + "-" + currentMonth;
expirationDateInput.value = defaultExpirationDate;
