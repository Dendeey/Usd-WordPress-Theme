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

  //Footer swiper slider
  function footerSponsorSlider() {
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
  footerSponsorSlider();

  //Template default left section swiper slider
  function templateDefaultSlider() {
    const swiper = new Swiper(".left__section__image", {
      // Optional parameters
      loop: false,

      // If we need pagination
      pagination: {
        el: ".left__section__image .swiper-pagination",
      },

      // Navigation arrows
      navigation: {
        nextEl: ".left__section__image .swiper-button-next",
        prevEl: ".left__section__image .swiper-button-prev",
      },
    });
  }
  templateDefaultSlider();
});
