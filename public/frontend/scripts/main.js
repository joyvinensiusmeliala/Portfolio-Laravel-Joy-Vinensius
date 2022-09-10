// import $ from "jquery";
(function() {
  "use strict";

  window.addEventListener("load", () => {
    on_page_load();
  });

  /**
   * Function gets called when page is loaded.
   */
  function on_page_load() {
    // Initialize On-scroll Animations
    AOS.init({
      anchorPlacement: "top-left",
      duration: 600,
      easing: "ease-in-out",
      once: true,
      mirror: false,
      disable: "mobile",
    });
  }
  const portfolioLightbox = GLightbox({
    selector: ".portfokio-lightbox",
  });

  /**
   * Navbar effects and scrolltop buttons upon scrolling
   */
  const navbar = document.getElementById("header-nav");
  var body = document.getElementsByTagName("body")[0];
  const scrollTop = document.getElementById("scrolltop");
  window.onscroll = () => {
    if (window.scrollY > 0) {
      navbar.classList.add("fixed-top", "shadow-sm");
      body.style.paddingTop = navbar.offsetHeight + "px";
      scrollTop.style.visibility = "visible";
      scrollTop.style.opacity = 1;
    } else {
      navbar.classList.remove("fixed-top", "shadow-sm");
      body.style.paddingTop = "0px";
      scrollTop.style.visibility = "hidden";
      scrollTop.style.opacity = 0;
    }
  };

  /**
   * Masonry Grid
   */
  var elem = document.querySelector(".grid");
  if (elem) {
    imagesLoaded(elem, function() {
      new Masonry(elem, {
        itemSelector: ".grid-item",
        percentPosition: true,
        horizontalOrder: true,
      });
    });
  }

  /**
   * Big Picture Popup for images and videos
   */
  document.querySelectorAll("[data-bigpicture]").forEach(function(e) {
    e.addEventListener("click", function(t) {
      t.preventDefault();
      const data = JSON.parse(e.dataset.bigpicture);
      BigPicture({
        el: t.target,
        ...data,
      });
    });
  });

  /**
   * Big Picture Popup for Photo Gallary
   */
  document.querySelectorAll(".bp-gallery a").forEach(function(e) {
    var caption = e.querySelector("figcaption");
    var img = e.querySelector("img");
    // set the link present on the item to the caption in full view
    img.dataset.caption =
      '<a class="link-light" target="_blank" href="' +
      e.href +
      '">' +
      caption.innerHTML +
      "</a>";
    window.console.log(caption, img);
    e.addEventListener("click", function(t) {
      t.preventDefault();
      BigPicture({
        el: t.target,
        gallery: ".bp-gallery",
      });
    });
  });

  // Add your javascript here
  // Get the modal
  window.onload = function() {
    const navBar = document.querySelector("#header-nav");
    // DOM Project
    const modal = document.querySelectorAll("#myModal");
    const img = document.querySelectorAll("#myImg");
    const modalImg = document.querySelectorAll("#img01");
    const captionText = document.querySelectorAll("#caption");

    // Loop for Project
    img.forEach((itemImg) => {
      itemImg.onclick = function() {
        modal.forEach((modalItem) => {
          modalItem.style.display = "block";
        });
        modalImg.forEach((modalItemImg) => {
          modalItemImg.src = this.src;
        });
        captionText.forEach((captionTextItem) => {
          captionTextItem.innerHTML = this.alt;
        });
        navBar.style.display = "none";
      };
    });
    const spanProject = document.querySelectorAll(".close-project");
    spanProject.forEach((spanProjectItem) => {
      spanProjectItem.onclick = function() {
        modal.forEach((modalItem) => {
          modalItem.style.display = "none";
        });
      };
    });
    // end Of Loop Project
    // end Of DOM Project

    // DOM Portfolio
    const modalPortofolio = document.querySelectorAll("#myModalPortofolio");
    const imgPortofolio = document.querySelectorAll("#myImgPortofolio");
    const modalImgPortofolio = document.querySelectorAll("#img02");
    const captionTextPortfolio = document.querySelectorAll(
      "#captionPortofolio"
    );
    // $(document).keydown(function(e) {
    //   // ESCAPE key pressed
    //   if (e.keyCode == 27) {
    //     window.close();
    //   }
    // });
    // Looping for certificate
    imgPortofolio.forEach((itemImg) => {
      itemImg.onclick = function() {
        modalPortofolio.forEach((modalItem) => {
          modalItem.style.display = "block";
        });
        modalImgPortofolio.forEach((modalItemImg) => {
          modalItemImg.src = this.src;
        });
        captionTextPortfolio.forEach((captionTextItem) => {
          captionTextItem.innerHTML = this.alt;
        });
        navBar.style.display = "none";
      };
    });
    const spanPortofolio = document.querySelectorAll(".close");
    spanPortofolio.forEach((spanProjectItem) => {
      spanProjectItem.onclick = function() {
        modalPortofolio.forEach((modalItem) => {
          modalItem.style.display = "none";
        });
      };
    });
    imgPortofolio.onclick = function() {
      modalPortofolio.style.display = "block";
      navBar.style.display = "none";
      modalImgPortofolio.src = this.src;
      captionTextPortfolio.innerHTML = this.alt;
    };
    // end of Looping for certificate
    // end of DOM Portfolio
  };
})();
