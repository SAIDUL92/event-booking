document.addEventListener("DOMContentLoaded", () => {
  const searchBox = document.getElementById("searchBox");
  const events = document.querySelectorAll(".event-card");

  if (searchBox) {
    searchBox.addEventListener("keyup", () => {
      const term = searchBox.value.toLowerCase();
      events.forEach((card) => {
        card.style.display = card.textContent.toLowerCase().includes(term)
          ? ""
          : "none";
      });
    });
  }

  const bookingForm = document.getElementById("bookingForm");
  if (bookingForm) {
    bookingForm.addEventListener("submit", (e) => {
      e.preventDefault();
      alert("Booking confirmed! (Replace with server call)");
    });
  }
});
