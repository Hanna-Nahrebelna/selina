console.log("home");const firstSectionSwiper=new Swiper(".first__container",{effect:"slide",loop:!0,slidesPerView:1,spaceBetween:50,direction:"horizontal",preloadImages:!1,lazy:{loadOnTransitionStart:!0,loadPrevNext:!0},lazyPreloadPrevNext:1,pagination:{enabled:!0,clickable:!0,el:".pgnt",bulletClass:"paw-pagination-bullet",bulletActiveClass:"paw-pagination-bullet-active",renderBullet:function(e,t){return`\n      <svg class="first-section__paw-svg-${e+1} paw-pagination-bullet" width="11.53" height="14.44">\n      <use href="${theme_directory}/assets/images/sprite.svg#icon-paw${e+2}"></use>\n      </svg>\n      `}}}),partnersSwiper=new Swiper(".partners-section__swiper",{effect:"slide",loop:!0,slidesPerView:2,spaceBetween:7,breakpoints:{768:{slidesPerView:4,spaceBetween:40},1440:{slidesPerView:5,spaceBetween:80}},direction:"horizontal",preloadImages:!1,lazy:{loadOnTransitionStart:!0,loadPrevNext:!0},navigation:{nextEl:".partners-section__arrow-right-btn",prevEl:".partners-section__arrow-left-btn"}}),newsSwiper=new Swiper(".news-section__swiper",{effect:"slide",loop:!0,slidesPerView:1,spaceBetween:24,breakpoints:{768:{slidesPerView:2},1440:{slidesPerView:3}},direction:"horizontal",preloadImages:!1,lazy:{loadOnTransitionStart:!0,loadPrevNext:!0},lazyPreloadPrevNext:1,navigation:{nextEl:".news-section__arrow-right-btn",prevEl:".news-section__arrow-left-btn"},on:{init:e=>{e.slides.forEach((e=>{const t=e.querySelector(".news-section__content-wrapper"),n=t.querySelector(".news-section__name").getBoundingClientRect().height,i=t.querySelector(".news-section__button").getBoundingClientRect().height,r=t.querySelector(".news-section__text"),o=t.getBoundingClientRect().height-24-n-i,s=Math.floor(o/21);r.style["-webkit-line-clamp"]=s}))}}});newsSwiper.on("init",(e=>{console.log(e);const t=document.querySelector("news-section__list");console.log(t),Array.from(t??[]).forEach((e=>{const t=e.querySelector("news-section__text"),n=e.querySelector("news-section__content-wrapper");console.log({textField:t,wrapper:n})}))}));const feedbacksSwiper=new Swiper(".feedbacks-section__swiper",{effect:"slide",loop:!0,slidesPerView:1,spaceBetween:20,breakpoints:{768:{slidesPerView:2},1440:{slidesPerView:3}},direction:"horizontal",preloadImages:!1,lazy:{loadOnTransitionStart:!0,loadPrevNext:!0},lazyPreloadPrevNext:1,navigation:{nextEl:".feedbacks-section__arrow-right-btn",prevEl:".feedbacks-section__arrow-left-btn"}});