
//---- Aside Admin ----///
document.addEventListener('DOMContentLoaded', function() {
    const toggleAsideBtn = document.getElementById('toggleAsideBtn');
    const sidebar = document.getElementById('myAside');
  
    toggleAsideBtn.addEventListener('click', function() {
      sidebar.classList.toggle('open');
    });
  });

//-----Login Register-----//
const container = document.getElementById("container");
const registerBtn = document.getElementById("register");
const loginBtn = document.getElementById("login");

registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});

document.getElementById('back-button').addEventListener('click', function() {
  window.history.back();
});


//----- Detail Product-----//
let currentSlide = 0;
const slides = document.querySelectorAll('.carousel img');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
}

function changeSlide(direction) {
    currentSlide = (currentSlide + direction + slides.length) % slides.length;
    showSlide(currentSlide);
}

function decreaseQuantity() {
    const quantityInput = document.getElementById('quantity');
    let quantity = parseInt(quantityInput.value);
    if (quantity > 1) {
        quantityInput.value = quantity - 1;
    }
}

function increaseQuantity() {
    const quantityInput = document.getElementById('quantity');
    let quantity = parseInt(quantityInput.value);
    const max = parseInt(quantityInput.max);
    if (quantity < max) {
        quantityInput.value = quantity + 1;
    }
}


// popup //

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}