function closeModal(modals, close, btnClose, str) {
    modals.classList.add("d-flex");
    close.onclick = function () {
      modals.classList.remove("d-flex");
      if (window.innerWidth > 1050) {
        unhideSidebar();
      }
    };
    modals.onclick = function () {
      modals.classList.remove("d-flex");
      if (window.innerWidth > 1050) {
        unhideSidebar();
      }
    };
    btnClose.onclick = function () {
      modals.classList.remove("d-flex");
      if (window.innerWidth > 1050) {
        unhideSidebar();
      }
    };
  
    let inner = document.getElementById(str);
    inner.onclick = function (e) {
      e.stopPropagation();
    };
  }
  
  function coffee_drink() {
    let modals = document.querySelector(".modal-layout.coffee_drink");
    let close = document.getElementsByClassName("modal-close")[0];
    let btnClose = document.getElementsByClassName("btn_close")[0];
  
    closeModal(modals, close, btnClose, "coffee_drink");
  }

  function whole_bean() {
    let modals = document.querySelector(".modal-layout.whole_bean");
    let close = document.getElementsByClassName("modal-close")[0];
    let btnClose = document.getElementsByClassName("btn_close")[0];
  
    closeModal(modals, close, btnClose, "whole_bean");
  }  
  
  function merchandise() {
    let modals = document.querySelector(".modal-layout.merchandise");
    let close = document.getElementsByClassName("modal-close")[0];
    let btnClose = document.getElementsByClassName("btn_close")[0];
  
    closeModal(modals, close, btnClose, "merchandise");
  }
  