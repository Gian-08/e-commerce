"use strict";
window.addEventListener("load", () => {
  const cards = document.querySelectorAll(".card");
  const modal = document.querySelector(".screen-modal");
  const cardsImgs = document.querySelectorAll(".card-img img");
  const imgModal = document.querySelector(".modal-img img");
  console.log(cardsImgs);
  for (const key in cards) {
    if (cards.hasOwnProperty(key)) {
      const card = cards[key];
      card.addEventListener("click", () => {
        modal.classList.add("open-modal");
        let data = cardsImgs[key].getAttribute("src");
        imgModal.setAttribute("src", data);
      });
    }
  }
  window.addEventListener("click", (e) => {
    if (e.target == modal) {
      modal.classList.remove("open-modal");
    }
  });
});
