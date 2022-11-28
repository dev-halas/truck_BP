const hero = document.querySelector('.heroSlider');
const heroImages = document.querySelectorAll('.heroSlider--img');
const heroNav = document.querySelectorAll('.heroSlide--navInner > span');

if (!hero) {
   return;
}

let currentSlide = 0;

const sliderLenght = heroImages.length;

const nextSlide = () => {
   heroImages.forEach((item) => {
      item.classList.remove('active');
   });

   heroNav.forEach((nav) => {
      nav.classList.remove('active');
   });

   currentSlide++;

   currentSlide > sliderLenght - 1 ? (currentSlide = 0) : currentSlide;

   heroNav[currentSlide].classList.add('active');
   heroImages[currentSlide].classList.add('active');
};

let autoPlay = null;

const slideRepeater = () => {
   autoPlay = setInterval(nextSlide, 6000);
};

slideRepeater();

heroNav.forEach((nav, item) => {
   nav.addEventListener('click', () => {
      clearInterval(autoPlay);
      slideRepeater();

      heroNav.forEach((nav) => {
         nav.classList.remove('active');
      });

      heroImages.forEach((image) => {
         image.classList.remove('active');
      });

      heroImages[item].classList.add('active');

      nav.classList.add('active');
   });
});
