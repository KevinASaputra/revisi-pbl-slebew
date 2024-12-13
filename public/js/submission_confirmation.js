const kirimBtn = document.getElementById("kirimBtn");
const popupBox = document.getElementById("popupBox");
const cancelBtn = document.getElementById("cancelBtn");
const confirmBtn = document.getElementById("confirmBtn");

kirimBtn.addEventListener("click", () => {
    popupBox.classList.remove("hidden");
});

cancelBtn.addEventListener("click", () => {
    popupBox.classList.add("hidden");
});

confirmBtn.addEventListener("click", () => {
    alert("Data berhasil dikirim!");
    popupBox.classList.add("hidden");
});