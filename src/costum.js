const searchInput = document.querySelector("[data-search]");
const cards = document.querySelectorAll(".card");
const filterDropdown = document.getElementById("filterDropdown");

function filterCards(value) {
  const searchValue = value.toLowerCase();
  cards.forEach(card => {
    const header = card.querySelector(".header");
    const isVisible = header && header.textContent.toLowerCase().includes(searchValue);
    card.classList.toggle("hide", !isVisible);
  });
}

// Input search 
searchInput.addEventListener("input", e => {
  filterDropdown.value = "";
  filterCards(e.target.value);
});

// Dropdown filtering
filterDropdown.addEventListener("change", e => {
  searchInput.value = ""; 
  filterCards(e.target.value);
});





//-------------------------------------
const backtotop_img = document.getElementById("backtotop-img");

window.onscroll = function () {
  if (document.documentElement.scrollTop > 70 || document.body.scrollTop > 70) {
    backtotop_img.classList.remove("scale-out-center");
    backtotop_img.classList.add("scale-in-center");
    backtotop_img.style.visibility = "visible";
  } else {
    backtotop_img.classList.remove("scale-in-center");
    backtotop_img.classList.add("scale-out-center");

    // Delay hiding until animation ends (0.5s)
    setTimeout(() => {
      if (!backtotop_img.classList.contains("scale-in-center")) {
        backtotop_img.style.visibility = "hidden";
      }
    }, 500);
  }
};

backtotop_img.onclick = function () {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};
