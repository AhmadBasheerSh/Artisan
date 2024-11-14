const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

// function validateStep(step) {

//     const page = document.querySelector(`.page:nth-child(${step})`);
//     if (!page) {
//         console.error(`No page found for step ${step}`);
//         return false;
//     }

//     const inputs = page.querySelectorAll(".input-field");
//     let valid = true;

//     inputs.forEach(input => {
//         const errorSpan = input.nextElementSibling;

//         if (!input.value.trim()) {
//             valid = false;
//             input.classList.add("invalid");

//             errorSpan.classList.add("error-message");
//             errorSpan.style.color = "red";
//             errorSpan.style.fontWeight = "bold";
//             errorSpan.style.display = "block";
//             errorSpan.textContent = "هذا الحقل مطلوب";
//         } else {
//             input.classList.remove("invalid");

//             errorSpan.textContent = "";
//             errorSpan.style.display = "none";
//         }
//     });

//     return valid;
// }


nextBtnFirst.addEventListener("click", function(event) {
    event.preventDefault();
    // if (validateStep(1)) {
        console.log("First Next Button Clicked");
        slidePage.style.marginLeft = "-25%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    // }
});

nextBtnSec.addEventListener("click", function(event) {
    event.preventDefault();
    // if (validateStep(2)) {
        slidePage.style.marginLeft = "-50%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    // }
});

nextBtnThird.addEventListener("click", function(event) {
    event.preventDefault();
    // if (validateStep(3)) {
        slidePage.style.marginLeft = "-75%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    // }
});

submitBtn.addEventListener("click", function() {
    // if (validateStep(4)) {
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
        setTimeout(function() {
            alert("Your Form Successfully Signed up");
            location.reload();
        }, 800);
    // }
});

prevBtnSec.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "0%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
});

prevBtnThird.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-25%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
});

prevBtnFourth.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-50%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
});
