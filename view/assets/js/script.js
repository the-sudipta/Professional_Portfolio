document.addEventListener("DOMContentLoaded", function () {
  'use strict';

  // Utility function to toggle class
  const elementToggleFunc = function (elem) {
    if (elem) {
      elem.classList.toggle("active");
    }
  };

  // Sidebar variables
  const sidebar = document.querySelector("[data-sidebar]");
  const sidebarBtn = document.querySelector("[data-sidebar-btn]");
  if (sidebar && sidebarBtn) {
    sidebarBtn.addEventListener("click", function () {
      elementToggleFunc(sidebar);
    });
  }

  // Testimonials variables
  const testimonialsItems = document.querySelectorAll("[data-testimonials-item]");
  const modalContainer = document.querySelector("[data-modal-container]");
  const modalCloseBtn = document.querySelector("[data-modal-close-btn]");
  const overlay = document.querySelector("[data-overlay]");
  const modalImg = document.querySelector("[data-modal-img]");
  const modalTitle = document.querySelector("[data-modal-title]");
  const modalText = document.querySelector("[data-modal-text]");
  const modalDate = document.querySelector("[data-modal-date]");

  const formatDate = function (dateString) {
    const options = { day: 'numeric', month: 'long', year: 'numeric' };
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', options);
  };

  const showModal = function (date) {
    if (modalContainer && overlay && modalDate) {
      modalContainer.classList.add("active");
      overlay.classList.add("active");
      if (date) {
        modalDate.innerHTML = formatDate(date);
      } else {
        modalDate.innerHTML = ''; // Clear date if no date is provided
      }
    }
  };

  const hideModal = function () {
    if (modalContainer && overlay) {
      modalContainer.classList.remove("active");
      overlay.classList.remove("active");
    }
  };

  if (testimonialsItems.length > 0) {
    testimonialsItems.forEach(item => {
      item.addEventListener("click", function () {
        const avatar = this.querySelector("[data-testimonials-avatar]");
        const title = this.querySelector("[data-testimonials-title]");
        const text = this.querySelector("[data-testimonials-text]");
        const date = this.dataset.testimonialsDate;

        if (avatar && title && text) {
          modalImg.src = avatar.src;
          modalImg.alt = avatar.alt;
          modalTitle.innerHTML = title.innerHTML;
          modalText.innerHTML = text.innerHTML;

          showModal(date);
        }
      });
    });
  }

  if (modalCloseBtn && overlay) {
    modalCloseBtn.addEventListener("click", hideModal);
    overlay.addEventListener("click", hideModal);
  }

  // Custom select variables
  const select = document.querySelector("[data-select]");
  const selectItems = document.querySelectorAll("[data-select-item]");
  const selectValue = document.querySelector("[data-selecct-value]");
  const filterBtn = document.querySelectorAll("[data-filter-btn]");

  if (select && selectItems.length > 0 && selectValue) {
    select.addEventListener("click", function () {
      elementToggleFunc(this);
    });

    selectItems.forEach(item => {
      item.addEventListener("click", function () {
        let selectedValue = this.innerText.toLowerCase();
        if (selectValue) {
          selectValue.innerText = this.innerText;
        }
        elementToggleFunc(select);
        filterFunc(selectedValue);
      });
    });
  }

  // Filter variables
  const filterItems = document.querySelectorAll("[data-filter-item]");

  const filterFunc = function (selectedValue) {
    filterItems.forEach(item => {
      if (selectedValue === "all") {
        item.classList.add("active");
      } else if (selectedValue === item.dataset.category.toLowerCase()) {
        item.classList.add("active");
      } else {
        item.classList.remove("active");
      }
    });
  };

  if (filterBtn.length > 0) {
    let lastClickedBtn = filterBtn[0];

    filterBtn.forEach(btn => {
      btn.addEventListener("click", function () {
        let selectedValue = this.innerText.toLowerCase();
        if (selectValue) {
          selectValue.innerText = this.innerText;
        }
        filterFunc(selectedValue);

        if (lastClickedBtn) {
          lastClickedBtn.classList.remove("active");
        }
        this.classList.add("active");
        lastClickedBtn = this;
      });
    });
  }

  // Contact form variables
  const form = document.querySelector("[data-form]");
  const formInputs = document.querySelectorAll("[data-form-input]");
  const formBtn = document.querySelector("[data-form-btn]");

  if (form && formInputs.length > 0 && formBtn) {
    formInputs.forEach(input => {
      input.addEventListener("input", function () {
        if (form.checkValidity()) {
          formBtn.removeAttribute("disabled");
        } else {
          formBtn.setAttribute("disabled", "");
        }
      });
    });
  }

  // Page navigation variables
  const navigationLinks = document.querySelectorAll("[data-nav-link]");
  const pages = document.querySelectorAll("[data-page]");

  if (navigationLinks.length > 0 && pages.length > 0) {
    navigationLinks.forEach(link => {
      link.addEventListener("click", function () {
        pages.forEach((page, index) => {
          if (this.innerHTML.toLowerCase() === page.dataset.page) {
            page.classList.add("active");
            navigationLinks[index].classList.add("active");
            window.scrollTo(0, 0);
          } else {
            page.classList.remove("active");
            navigationLinks[index].classList.remove("active");
          }
        });
      });
    });
  }
});
