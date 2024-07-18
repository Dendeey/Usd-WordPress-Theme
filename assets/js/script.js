window.addEventListener("DOMContentLoaded", function () {
  //Effet header au défilement
  function headerEffectOnScroll() {
    let header = document.getElementById("homepage__header");
    let logo = document.getElementById("site__header__logo");

    // Fonction pour appliquer l'effet sticky
    function applyStickyEffect() {
      if (header) {
        header.classList.toggle("sticky", window.scrollY > 0);
        logo.classList.toggle("sticky__logo", window.scrollY > 0);
      }
    }

    // Vérifier la position de défilement initiale
    applyStickyEffect();

    // Ajouter l'événement de défilement
    window.addEventListener("scroll", applyStickyEffect);
  }
  headerEffectOnScroll();

  //Fonction qui permet d'ouvrir le menu burger
  function burgerMenuOnClick() {
    let menuBtn = document.getElementById("menu__btn");
    let burgerMenu = document.getElementById("burger__menu");
    let overlay = document.getElementById("overlay");
    let burgerMenuBtn = document.getElementById("top__header__burger__icon");

    menuBtn.addEventListener("click", function () {
      burgerMenu.classList.toggle("open");
      if (overlay.style.display === "none" || overlay.style.display === "") {
        overlay.style.display = "block";
      }
    });

    //Au clique sur le document
    document.addEventListener("click", function (event) {
      let clickInMenuBtn = menuBtn.contains(event.target);
      let clickInBurgerMenu = burgerMenu.contains(event.target);
      let clickInBurgerMenuBtn = burgerMenuBtn.contains(event.target);
      //Si le clique est dans sur le bouton "Burger Menu" ou n'est ni dans le bouton du menu et dans le menu
      if (clickInBurgerMenuBtn || (!clickInMenuBtn && !clickInBurgerMenu)) {
        burgerMenu.classList.remove("open");
        overlay.style.display = "none";
      }
    });
  }
  burgerMenuOnClick();

  //Fonction qui permet d'ouvrir les sous-menus
  function dropdownBurgerMenu() {
    let dropdownBtnClub = document.getElementById("title__arrow__club");
    let arrowClub = document.getElementById("arrow__club");
    let dropdownContentClub = document.getElementById(
      "content__dropdown__club"
    );

    let dropdownBtnEquipes = document.getElementById("title__arrow__equipes");
    let arrowEquipes = document.getElementById("arrow__equipes");
    let dropdownContentEquipes = document.getElementById(
      "content__dropdown__equipes"
    );

    let dropdownBtnLicences = document.getElementById("title__arrow__licences");
    let arrowLicences = document.getElementById("arrow__licences");
    let dropdownContentLicences = document.getElementById(
      "content__dropdown__licences"
    );

    dropdownBtnClub.addEventListener("click", function () {
      toggleDropdown(arrowClub, dropdownContentClub);
      closeOtherDropdown(arrowEquipes, dropdownContentEquipes);
      closeOtherDropdown(arrowLicences, dropdownContentLicences);
    });

    dropdownBtnEquipes.addEventListener("click", function () {
      toggleDropdown(arrowEquipes, dropdownContentEquipes);
      closeOtherDropdown(arrowClub, dropdownContentClub);
      closeOtherDropdown(arrowLicences, dropdownContentLicences);
    });

    dropdownBtnLicences.addEventListener("click", function () {
      toggleDropdown(arrowLicences, dropdownContentLicences);
      closeOtherDropdown(arrowClub, dropdownContentClub);
      closeOtherDropdown(arrowEquipes, dropdownContentEquipes);
    });

    function toggleDropdown(arrow, content) {
      arrow.classList.toggle("rotate__180");
      content.classList.toggle("content__dropdown__hidden");
    }

    function closeOtherDropdown(otherArrow, otherContent) {
      if (!otherContent.classList.contains("content__dropdown__hidden")) {
        otherArrow.classList.remove("rotate__180");
        otherContent.classList.add("content__dropdown__hidden");
      }
    }
  }
  dropdownBurgerMenu();

  //Liens d'ancrage
  function scrollToAnchorLink() {
    scrollTo = (element) => {
      window.scroll({
        behavior: "smooth",
        left: 0,
        top: element.offsetTop - 125,
      });
    };

    if (
      document.getElementById(
        "classement__teams__anchor",
        "calendrier-resultats__teams__anchor",
        "gardiens",
        "defenseurs",
        "milieux",
        "attaquants",
        "staff"
      )
    ) {
      document
        .getElementById("classement__teams__anchor")
        .addEventListener("click", () => {
          scrollTo(document.getElementById("classement__teams"));
        });

      document
        .getElementById("calendrier-resultats__teams__anchor")
        .addEventListener("click", () => {
          scrollTo(document.getElementById("calendrier-resultats__teams"));
        });

      document.getElementById("gardiens").addEventListener("click", () => {
        scrollTo(document.getElementById("gardiens__target"));
      });

      document.getElementById("defenseurs").addEventListener("click", () => {
        scrollTo(document.getElementById("defenseurs__target"));
      });

      document.getElementById("milieux").addEventListener("click", () => {
        scrollTo(document.getElementById("milieux__target"));
      });

      document.getElementById("attaquants").addEventListener("click", () => {
        scrollTo(document.getElementById("attaquants__target"));
      });

      document.getElementById("staff").addEventListener("click", () => {
        scrollTo(document.getElementById("staff__target"));
      });
    }
  }
  scrollToAnchorLink();

  //Function carousel template default
  function templateDefaultSlider() {
    const slides = document.querySelectorAll(".illustration__template");
    const prevBtn = document.getElementById("prev-button");
    const nextBtn = document.getElementById("next-button");

    if (slides.length === 0) {
      console.warn("No slides found with class .illustration__template");
      return;
    }

    if (!prevBtn) {
      console.warn("Previous button not found with id #prev-button");
    }

    if (!nextBtn) {
      console.warn("Next button not found with id #next-button");
    }

    let currentIndex = 0;

    function updateCarousel() {
      for (let index = 0; index < slides.length; index++) {
        const slide = slides[index];

        if (index === currentIndex) {
          slide.style.transform = `translateX(0)`;
        } else if (index < currentIndex) {
          slide.style.transform = `translateX(-100%)`;
        } else {
          slide.style.transform = `translateX(100%)`;
        }
      }

      // Masquer les boutons de pagination si un seul élément est présent
      if (slides.length <= 1) {
        if (prevBtn) prevBtn.style.display = "none";
        if (nextBtn) nextBtn.style.display = "none";
      } else {
        // Masquer ou afficher les boutons en fonction de l'index actuel
        if (prevBtn) {
          prevBtn.style.display = currentIndex === 0 ? "none" : "block";
        }

        if (nextBtn) {
          nextBtn.style.display =
            currentIndex === slides.length - 1 ? "none" : "block";
        }
      }
    }

    if (prevBtn) {
      prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) {
          currentIndex--;
          updateCarousel();
        }
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener("click", () => {
        if (currentIndex < slides.length - 1) {
          currentIndex++;
          updateCarousel();
        }
      });
    }

    updateCarousel();
  }

  document.addEventListener("DOMContentLoaded", templateDefaultSlider);

  templateDefaultSlider();

  function swiperSlider() {
    const swiper = new Swiper(".swiper", {
      // Optional parameters
      loop: true,
      autoplay: {
        delay: 1000,
      },
      // Default parameters
      slidesPerView: 5,
      spaceBetween: 200,
      // Responsive breakpoints
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        // when window width is >= 1024px
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        // when window width is >= 1440px
        1440: {
          slidesPerView: 5,
          spaceBetween: 40,
        },
      },
    });
  }
  swiperSlider();
});
