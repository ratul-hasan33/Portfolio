var hamburger = document.querySelector(".menu_opn");
var hide_menus = document.querySelector(".menu_cl");
var nav = document.querySelector(".main_menu");



// memu

hamburger.addEventListener("click", function(){
  nav.style.transform = `translateX(0%)`;
  nav.style.height = `100%`;
  hide_menus.style.display = `flex`;
  hamburger.style.display = `none`;
})
hide_menus.addEventListener("click", function(){
  nav.style.height = `0`;
  nav.style.transform = `translateX(100%)`;
  hide_menus.style.display = `none`;
  hamburger.style.display = `flex`;
})





// Sticky-menu
let navbar = document.querySelector("#header_area");

window.addEventListener("scroll",function(event){
  // console.log(window.scrollY);
  if(this.window.scrollY > 500){
    navbar.classList.add("sticky_menu")
  }
  else{
    navbar.classList.remove("sticky_menu");
  }
})

let slider = document.querySelector("#hero_img");
let slidel = document.querySelector("#hero_details");

window.addEventListener("scroll",function(event){


  if(window.scrollY >= 80 ){
    slider.classList.add("hero_img_right");
    slidel.classList.add("hero_details");
  }
  else{
    slider.classList.remove("hero_img_right");
    slidel.classList.remove("hero_details");
  }
})

//Theme Mode
let dark = document.querySelector(".dark_mode") ;
let light = document.querySelector(".light_mode");

light.addEventListener("click", function(){
  console.log(1);
  
  function body_white() {
    document.documentElement.style.setProperty('--primarycolor', '#ffffff');
    document.documentElement.style.setProperty('--text-color', '#000000');

  }
 return body_white();
})
dark.addEventListener("click", function(){
  
   function body_white() {
    document.documentElement.style.setProperty('--primarycolor', '#031914');
    document.documentElement.style.setProperty('--text-color', '#ffffff');

  }
 return body_white();
})


// service



// window.addEventListener("scroll",function(event){
// // console.log(window.scrollY);

//       if(this.window.scrollY > 500){
//        let fadelup = document.querySelectorAll(".service_card");
//       fadelup.forEach(element =>{
//       element.classList.add("fadeInUp");
//      })
//       }
//       else{
//         let fadelup = document.querySelectorAll(".service_card");
//         fadelup.forEach(element =>{
//         element.classList.remove("fadeInUp");})
//       }

// })

let service = document.querySelector('.service_card_area');

window.addEventListener('scroll', () => {
    const sectionTop = service.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (sectionTop < windowHeight && sectionTop > 160) {
        service.classList.add('fadeInUp');
    } else {
        service.classList.remove('fadeInUp');
    }
});





let btp = document.querySelector(".back_to_top");

window.addEventListener("scroll",function(event){
  
  if(this.window.scrollY > 700){
    btp.style.display = "inline-block";
  }
  else{
    btp.style.display = "none";
  }
})

btp.addEventListener("click", function(){
  window.scrollTo({top: 0, behavior: 'smooth'});})

// JQuery Start

jQuery(document).ready(function($) {
 




// Frameworks

$('.fram_slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: false,
  nextArrow: false,
  // prevArrow: '<button class="slick-pv"><i class="fa-solid fa-caret-left"></i></button>',
  // nextArrow: '<button class="slick-rg"><i class="fa-solid fa-caret-right"></i></button>',
  dots: false,
  margin:20,
// rows: 3,
  responsive: [
  {
      breakpoint: 1199,
      settings: {
      slidesToShow: 3,
      }
  },
{
      breakpoint: 991,
      settings: {
      slidesToShow: 2,
      }
  },
  {
      breakpoint: 767,
      settings: {
      slidesToShow: 2,
      prevArrow: false,
      nextArrow: false,
  
      }
  }
  ]
});

// Plugins
$('.plugins_slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: false,
  nextArrow: false,
  // prevArrow: '<button class="slick-pv"><i class="fa-solid fa-caret-left"></i></button>',
  // nextArrow: '<button class="slick-rg"><i class="fa-solid fa-caret-right"></i></button>',
  dots: false,
  margin:20,
// rows: 3,
  responsive: [
  {
      breakpoint: 1199,
      settings: {
      slidesToShow: 3,
      }
  },
{
      breakpoint: 991,
      settings: {
      slidesToShow: 2,
      }
  },
  {
      breakpoint: 767,
      settings: {
      slidesToShow: 2,
      prevArrow: false,
      nextArrow: false,
  
      }
  }
  ]
});

});
 

