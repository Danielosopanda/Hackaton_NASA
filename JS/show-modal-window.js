const   modalWindow = document.querySelector(".modal-window__background"),
        container = document.querySelector(".container"),
        form = document.querySelector(".form"),
        buyTicketBtn = document.querySelector("#confirmTravelBtn"),
        cancelBuyBtn = document.querySelector(".button--cancel"),
        confirmBuyBtn = document.querySelector("#confirmBuyBtn");

buyTicketBtn.addEventListener("click", () => {
    container.appendChild(modalWindow);
    modalWindow.style.display = "flex";
});

cancelBuyBtn.addEventListener("click", () => {
    form.appendChild(modalWindow);
    modalWindow.style.display = "none";
});

confirmBuyBtn.addEventListener("click", () => {
    form.appendChild(modalWindow);
    modalWindow.style.display = "none";
});
 

