// pagination.js
class NewsPagination {
  constructor(cardsPerPage = 9) {
    // Get the existing flex container
    this.container = document.querySelector(".max-width .d-flex.flex-wrap");
    if (!this.container) return;

    this.cardsPerPage = cardsPerPage;
    this.currentPage = 1;
    this.cards = [...this.container.querySelectorAll(".card")];
    this.totalPages = Math.ceil(this.cards.length / this.cardsPerPage);

    // Store original flex layout styles
    this.originalDisplay = window.getComputedStyle(this.container).display;

    this.init();
  }

  init() {
    // Remove existing pagination if any
    const existingPagination = document.querySelector(".pagination");
    if (existingPagination) {
      existingPagination.remove();
    }

    // Adjust cards per page based on screen width
    this.adjustCardsPerPage();

    // Create new pagination
    this.createPagination();

    // Show initial page
    this.showPage(1);

    // Add event listeners to pagination buttons
    document.querySelector(".pagination").addEventListener("click", (e) => {
      if (e.target.classList.contains("page-link")) {
        e.preventDefault();
        const pageNum = parseInt(e.target.textContent);
        this.showPage(pageNum);
      }
    });

    // Add event listener for window resize to adjust cards per page
    window.addEventListener("resize", () => {
      this.adjustCardsPerPage();
      this.createPagination();
      this.showPage(this.currentPage);
    });
  }

  adjustCardsPerPage() {
    if (window.innerWidth <= 1024) {
      this.cardsPerPage = 8;
    } else {
      this.cardsPerPage = 9;
    }
    this.totalPages = Math.ceil(this.cards.length / this.cardsPerPage);
  }

  showPage(pageNum) {
    // Calculate start and end indices
    const start = (pageNum - 1) * this.cardsPerPage;
    const end = start + this.cardsPerPage;

    // Hide all cards
    this.cards.forEach((card) => {
      card.style.display = "none";
    });

    // Show cards for current page
    this.cards.slice(start, end).forEach((card) => {
      card.style.display = "flex"; // Maintain flex display for cards
    });

    // Update active state in pagination
    this.updatePaginationState(pageNum);

    // Update current page
    this.currentPage = pageNum;

    // Scroll to top of cards section
    this.container.scrollIntoView({ behavior: "smooth", block: "start" });
  }

  createPagination() {
    const existingPagination = document.querySelector(".pagination");
    const paginationContainer = existingPagination || document.createElement("ul");
    paginationContainer.className = "pagination justify-content-center";
    paginationContainer.innerHTML = ""; // Clear existing pagination

    for (let i = 1; i <= this.totalPages; i++) {
      const li = document.createElement("li");
      li.className = "page-item";
      if (i === 1) li.classList.add("active");

      const a = document.createElement("a");
      a.className = "page-link";
      a.href = "#";
      a.textContent = i;

      li.appendChild(a);
      paginationContainer.appendChild(li);
    }

    // If using existing pagination, we don't need to append it
    if (!existingPagination) {
      // Add pagination after the card container
      this.container.parentNode.appendChild(paginationContainer);
    }
  }

  updatePaginationState(pageNum) {
    const paginationItems = document.querySelectorAll(".page-item");
    paginationItems.forEach((item) => {
      item.classList.remove("active");
      if (parseInt(item.querySelector(".page-link").textContent) === pageNum) {
        item.classList.add("active");
      }
    });
  }
}

// Initialize when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
  new NewsPagination(9); // Default to 9 cards per page
});
