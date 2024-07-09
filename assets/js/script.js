window.addEventListener("DOMContentLoaded", function () {
  //Effet header au défilement
  function headerEffectOnScroll() {
    window.addEventListener("scroll", function () {
      var header = document.getElementById("homepage__header");
      var logo = document.getElementById("site__header__logo");
      if (header) {
        header.classList.toggle("sticky", window.scrollY > 0);
        logo.classList.toggle("sticky__logo", window.scrollY > 0);
      }
    });
  }
  headerEffectOnScroll();

  //Fonction qui permet d'ouvrir le menu burger
  function burgerMenuOnClick() {
    var menuBtn = document.getElementById("menu__btn");
    var burgerMenu = document.getElementById("burger__menu");
    var overlay = document.getElementById("overlay");
    var burgerMenuBtn = document.getElementById("top__header__burger__icon");

    menuBtn.addEventListener("click", function () {
      burgerMenu.classList.toggle("open");
      if (overlay.style.display === "none" || overlay.style.display === "") {
        overlay.style.display = "block";
      }
    });

    //Au clique sur le document
    document.addEventListener("click", function (event) {
      var clickInMenuBtn = menuBtn.contains(event.target);
      var clickInBurgerMenu = burgerMenu.contains(event.target);
      var clickInBurgerMenuBtn = burgerMenuBtn.contains(event.target);
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
    var dropdownBtnTop = document.getElementById("title__arrow__top");
    var arrowTop = document.getElementById("arrow__top");
    var dropdownContentTop = document.getElementById("content__dropdown__top");

    var dropdownBtnBottom = document.getElementById("title__arrow__bottom");
    var arrowBottom = document.getElementById("arrow__bottom");
    var dropdownContentBottom = document.getElementById(
      "content__dropdown__bottom"
    );

    dropdownBtnTop.addEventListener("click", function () {
      toggleDropdown(arrowTop, dropdownContentTop);
      closeOtherDropdown(arrowBottom, dropdownContentBottom);
    });

    dropdownBtnBottom.addEventListener("click", function () {
      toggleDropdown(arrowBottom, dropdownContentBottom);
      closeOtherDropdown(arrowTop, dropdownContentTop);
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

  //Function carousel vertical
  function templateDefaultSlider() {
    const slides = document.querySelectorAll(".illustration__template");
    const prevBtn = document.getElementById("prev-button");
    const nextBtn = document.getElementById("next-button");

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
        prevBtn.style.display = "none";
        nextBtn.style.display = "none";
      } else {
        // Masquer ou afficher les boutons en fonction de l'index actuel
        if (currentIndex === 0) {
          prevBtn.style.display = "none";
        } else {
          prevBtn.style.display = "block";
        }

        if (currentIndex === slides.length - 1) {
          nextBtn.style.display = "none";
        } else {
          nextBtn.style.display = "block";
        }
      }
    }

    prevBtn.addEventListener("click", () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
      }
    });

    nextBtn.addEventListener("click", () => {
      if (currentIndex < slides.length - 1) {
        currentIndex++;
        updateCarousel();
      }
    });

    updateCarousel();
  }
  templateDefaultSlider();
});
