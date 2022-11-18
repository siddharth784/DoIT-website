//for images slider


var swiper = new Swiper(".home-slider", {
    spaceBetween: 20,
    effect: "fade",
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});

//for faq dropdown accordion
const faqs=document.querySelectorAll(".qa");

faqs.forEach(faq=>{
    faq.addEventListener("click",() => {
        faq.classList.toggle("active");
    })
})