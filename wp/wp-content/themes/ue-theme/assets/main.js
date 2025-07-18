// Section: proyectos-slider
// Carousel Arg

var multipleCardCarouselArg = document.querySelector("#carouselArgControls");
if (multipleCardCarouselArg) {
  if (window.matchMedia("(min-width: 768px)").matches) {
    var element = document.getElementById("id-carousel-item-arg");
    element.classList.remove("active");
    var carousel = new bootstrap.Carousel(multipleCardCarouselArg, {
      interval: true,
    });
    var carouselWidth = $(".carousel-inner")[0].scrollWidth;
    var cardWidth = $(".carousel-item").width();
    var scrollPosition = 0;
    $("#carouselArgControls .carousel-control-next").on("click", function () {
      if (scrollPosition < carouselWidth - cardWidth * 4) {
        scrollPosition += cardWidth + 15;
        $("#carouselArgControls .carousel-inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });
    $("#carouselArgControls .carousel-control-prev").on("click", function () {
      if (scrollPosition > 0) {
        scrollPosition -= cardWidth + 15;
        $("#carouselArgControls .carousel-inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });
  } else {
    $(multipleCardCarouselArg).addClass("slide");
  }
}

  


// Carousel Uru

var multipleCardCarouselUru = document.querySelector("#carouselUruControls");
if (multipleCardCarouselUru) {
  if (window.matchMedia("(min-width: 768px)").matches) {

    var element = document.getElementById("id-carousel-item-uru");
    element.classList.remove("active");

    var carousel = new bootstrap.Carousel(multipleCardCarouselUru, {
      interval: true,
    });
    var carouselWidth = $(".carousel-inner")[0].scrollWidth;
    var cardWidth = $(".carousel-item").width();
    var scrollPosition = 0;
    $("#carouselUruControls .carousel-control-next").on("click", function () {
      if (scrollPosition < carouselWidth - cardWidth * 4) {
        scrollPosition += cardWidth + 15;
        $("#carouselUruControls .carousel-inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });
    $("#carouselUruControls .carousel-control-prev").on("click", function () {
      if (scrollPosition > 0) {
        scrollPosition -= cardWidth + 15;
        $("#carouselUruControls .carousel-inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });
  } else {
    $(multipleCardCarouselUru).addClass("slide");
  }
}

// Carousel Esp
var multipleCardCarouselEsp = document.querySelector("#carouselEspControls");
if (multipleCardCarouselEsp) {
  if (window.matchMedia("(min-width: 768px)").matches) {

    var element = document.getElementById("id-carousel-item-esp");
    element.classList.remove("active");

    var carousel = new bootstrap.Carousel(multipleCardCarouselEsp, {
      interval: true,
    });
    var carouselWidth = $(".carousel-inner")[0].scrollWidth;
    var cardWidth = $(".carousel-item").width();
    var scrollPosition = 0;
    $("#carouselEspControls .carousel-control-next").on("click", function () {
      if (scrollPosition < carouselWidth - cardWidth * 4) {
        scrollPosition += cardWidth +15;
        $("#carouselEspControls .carousel-inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });
    $("#carouselEspControls .carousel-control-prev").on("click", function () {
      if (scrollPosition > 0) {
        scrollPosition -= cardWidth + 15;
        $("#carouselEspControls .carousel-inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });
  } else {
    $(multipleCardCarouselEsp).addClass("slide");
  }
}

// Video autoplay on mouse over
const clip = document.querySelectorAll(".hover-to-play");
for (let i = 0; i < clip.length; i++) { clip[i].addEventListener("mouseenter", function (e) { clip[i].play();
  }); clip[i].addEventListener("mouseout", function (e) { clip[i].pause(); }); }


// Counter numbers
if (document.querySelector('section#numeros')) {
  const counters = document.querySelectorAll('.counters span');
  const container = document.querySelector('.counters');
  let activated = false;
  window.addEventListener("scroll", () => {
    if (
      pageYOffset > container.offsetTop - container.offsetHeight - 400 && activated === false
    ) {
      counters.forEach(counter => {
        counter.innerText = 0;
        let count = 0;
        function updateCount() {
          const target = parseInt(counter.dataset.count);
          switch (target) {
            case 600:
              if (count < target) {
                count = count + 15;
                counter.innerText = count;
                setTimeout(updateCount,70);
      
              } else {
                counter.innerText = target;
              }
            break;
            case 25:
              if (count < target) {
                count++;
                counter.innerText = count;
                setTimeout(updateCount,130);
      
              } else {
                counter.innerText = target;
              }
            break;
            case 2:
              if (count < target) {
                count++;
                counter.innerText = count;
                setTimeout(updateCount,2200);
      
              } else {
                counter.innerText = target;
              }
            break;
            default:
              if (count < target) {
                count++;
                counter.innerText = count;
                setTimeout(updateCount,170);
      
              } else {
                counter.innerText = target;
              }
          }
        }
        updateCount();
        activated = true;
      });
    } else if (
        pageYOffset === 0 && activated === true
    ) {
      counters.forEach(counter => {counter.innerText = 0;
      });
      activated = false;
    }
  });
}

// Toogle mobile navbar menu, collapse when click any link
if (document.querySelector('div#navbar')) {
  let elemLink = document.getElementsByClassName("nav-link");
  let elemNavbar = document.getElementById("navbar");
  for (let i = 0; i < elemLink.length; i++) {
    elemLink[i].addEventListener("click", closeMenu)
  }
  function closeMenu() {
    elemNavbar.classList.remove("show");
  }
}


// Webpack Imports
import * as bootstrap from 'bootstrap';


( function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call( document.querySelectorAll( '.search-form' ), ( el ) => {
		el.addEventListener( 'submit', function ( e ) {
			var search = el.querySelector( 'input' );
			if ( search.value.length < 1 ) {
				e.preventDefault();
				search.focus();
			}
		} );
	} );

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call( document.querySelectorAll( '[data-bs-toggle="popover"]' ) );
	var popoverList = popoverTriggerList.map( function ( popoverTriggerEl ) {
		return new bootstrap.Popover( popoverTriggerEl, {
			trigger: 'focus',
		} );
	} );
} )();



