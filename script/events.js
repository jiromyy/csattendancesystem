/** @format */

var datamap = new Map([[document.getElementById("create_button"), document.getElementById("create_event_modal")]]);

datamap.forEach((value, key) => {
  doModal(key, value);
});

function doModal(anchor, popupbox) {
  // Get the <span> element that closes the modal
  //   var span = popupbox.getElementsByClassName("close")[0];

  anchor.addEventListener("click", function (event) {
    popupbox.style.display = "block";
    // window.onclick = function (event) {
    //   // if the modal is open and if the length of the event_name field is 0, the user can close the modal by clicking exterior part of the modal component
    //   if (event.target == modal) {
    //     let notEmpty = false;
    //     // if one of the form inputs have value then change the value of the variable notEmpty
    //     add_event_form.querySelectorAll("[required]").forEach(function (i) {
    //       console.log(i.value.length);
    //       if (i.value.length != 0) {
    //         notEmpty = true;
    //         return;
    //       }
    //     });

    //     // Yes-or-No Question message will pop
    //     if (notEmpty) {
    //       let m = confirm("If you decide to exit this page, no information will be kept. Are you sure?");
    //       if (m == true) {
    //         modal.style.display = "none";
    //         add_event_form.querySelectorAll("[required]").forEach(function (i) {
    //           i.value = "";
    //         });
    //       }
    //     } else {
    //       modal.style.display = "none";
    //     }
    //   }
    // };
  });
}

let edit_modal = () => {
  let modal = document.querySelector("#edit_event_modal");
  let add_event_form = document.querySelector("#edit_event_form");
  modal.style.display = "block";
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
};
