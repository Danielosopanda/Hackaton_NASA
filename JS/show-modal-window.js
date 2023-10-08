const   modalWindow = document.querySelector(".modal-window__background"),
        container = document.querySelector(".container"),
        form = document.querySelector(".form"),
        buyTicketBtn = document.querySelector(".button--confirmTravel"),
        cancelBuyBtn = document.querySelector(".button--cancel");

buyTicketBtn.addEventListener("click", () => {
    container.appendChild(modalWindow);
    modalWindow.style.display = "flex";
});

cancelBuyBtn.addEventListener("click", () => {
    form.appendChild(modalWindow);
    modalWindow.style.display = "none";
});
 
