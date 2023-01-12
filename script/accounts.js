/** @format */
 
let modal = document.getElementById("myModal");
let add_event_form = document.querySelector(".add_event_form");
let btn = document.getElementById("myBtn");
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
};

//close the modal
span.onclick = function () {
  modal.style.display = "none";
};

console.log(document.querySelector(".event_name").value.length);
// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  // if the modal is open and if the length of the event_name field is 0, the user can close the modal by clicking exterior part of the modal component
  if (event.target == modal) {
    let notEmpty = false;
    // if one of the form inputs have value then change the value of the variable notEmpty
    add_event_form.querySelectorAll("[required]").forEach(function (i) {
      console.log(i.value.length);
      if (i.value.length != 0) {
        notEmpty = true;
        return;
      }
    });

    // Yes-or-No Question message will pop
    if (notEmpty) {
      let m = confirm("If you decide to exit this page, no information will be kept. Are you sure?");
      if (m == true) {
        modal.style.display = "none";
        add_event_form.querySelectorAll("[required]").forEach(function (i) {
          i.value = "";
        });
      }
    } else {
      modal.style.display = "none";
    }
  }
};
