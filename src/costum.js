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



