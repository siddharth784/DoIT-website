let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

// function openreadmore() {
//     var dots = document.getElementById("dots");
//     var moreText = document.getElementById("more");
//     var btnText = document.getElementById("myBtn");
  
//     if (dots.style.display === "none") {
//       dots.style.display = "inline";
//       btnText.innerHTML = "Read more";
//       moreText.style.display = "none";
//     } else {
//       dots.style.display = "none";
//       btnText.innerHTML = "Read less";
//       moreText.style.display = "inline";
//     }
//   }


var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        600:{
            slidesPerView:2,
        },
    },
});

var swiper = new Swiper(".blogs-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        991:{
            slidesPerView:3,
        },
    },
});






//JS TABS IN THE JOIN US PAGE
// var tabs=document.querySelectorAll(".center .tabs button");
// var tabContents=document.querySelectorAll("[data-tab-content]");

// tabs.forEach(tab =>{
//     tab.addEventListener('click',() =>{
//         alert('clicked');
//         const target = document.querySelector(tab.dataset.tabTarget)
//         tabContents.forEach(tabContent=>{
//             tabContent.classList.remove('active')
//         });
//         target.classList.add('active')
//     });
// });


function show_individ(){
    document.getElementById('academy').style.display="none";
    document.getElementById('individual').style.display="block";
    document.getElementById('individ-btn').classList.add('active');
    document.getElementById('academy-btn').classList.remove('active');
}
function show_academy(){
    document.getElementById('individual').style.display="none";
    document.getElementById('academy').style.display="block";
    document.getElementById('academy-btn').classList.add('active');
    document.getElementById('individ-btn').classList.remove('active');
}

$(document).ready(function(){
    $("input").click(function(){
        $(this).parent().addClass("filled");
    });
});






