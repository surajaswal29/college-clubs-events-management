"use strict";
// Author: Suraj Aswal
const downClick = document.querySelectorAll("#down-tab"); //getting all click button element
const hnbguClub = document.querySelectorAll("#hnbgu-clubs"); //getting all dropdown element
const hamMenuBtn = document.querySelector("#ham-default");
const hamMenuDropdown = document.querySelector("#hnbgu-nav-links");
const password = document.querySelector("#pass");
const cPassword = document.querySelector("#c-pass");
const passErr = document.querySelectorAll("#passError");
const submitButton = document.querySelector("#reg-submit");

console.log(password);
console.log(cPassword);
// console.log(downClick);
console.log(hamMenuBtn);
// performing event for every node
for (let i = 0; i < downClick.length; i++) {
  const ele = downClick[i];
  ele.addEventListener("click", function () {
    hnbguClub[i].classList.toggle("hnbgu-clubs-hide");
  });
}
// console.log(hamMenuBtn.classList);
if (hamMenuBtn) {
  hamMenuBtn.addEventListener("click", function () {
    console.log("clicked Menu");
    hamMenuDropdown.classList.toggle("hide-navbar");
  });
}

const submitBtn = function () {
  submitButton.removeAttribute("disabled");
  submitButton.style.cursor = "pointer";
};

if (password && cPassword) {
  password.addEventListener("focusout", function () {
    console.log(password.value);
  });

  password.addEventListener("input", function () {
    const passValue = password.value;
    const regEx =
      /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})/;
    if (passValue.match(regEx)) {
      console.log(passValue);
      passErr[0].textContent = "Strong Password!";
      passErr[0].style.color = "green";
      password.style.border = "1px solid green";
    } else {
      passErr[0].textContent =
        "Password must contain atleast 8 character,  one capital alphabet [A-Z],  one small alphabet [a-z],  one number [0-9] and a special character (@,$,*,/) ";
      passErr[0].style.color = "red";
      password.style.border = "1px solid red";
    }
  });
  cPassword.addEventListener("focusout", function () {
    if (cPassword.value == password.value) {
      passErr[1].textContent = "Password Matched!";
      passErr[1].style.color = "green";
      cPassword.style.border = "1px solid green";
      submitBtn();
    } else {
      passErr[1].textContent = "Password does not matched!";
      passErr[1].style.color = "red";
    }
  });
}
