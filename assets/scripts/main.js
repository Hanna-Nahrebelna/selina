<<<<<<< HEAD
console.log("footer part");let scrollTopBtn=document.getElementById("myBtn");function scrollFunction(){let e=window.innerHeight,t=document.documentElement.scrollHeight,o=window.pageYOffset||document.documentElement.scrollTop,n=t-(o+e);scrollTopBtn.style.display=o>20?"block":"none",scrollTopBtn.style.bottom=n<=373?"373px":"50px"}window.onscroll=function(){scrollFunction()},scrollTopBtn.addEventListener("click",(function(){window.scrollTo({top:0,behavior:"smooth"})}));const navMenu=document.getElementById("header-nav-menu"),burgerBtn=document.getElementById("header-menu-btn"),headerTopMobile=document.getElementById("header-mobile"),headerList=document.querySelector(".header__list"),itemsList=headerList.querySelectorAll(".menu-item"),headerListMobile=document.querySelector(".header__list-mobile"),itemsListMobile=headerListMobile.querySelectorAll(".menu-item");function redirectToPage(e){window.location.href=e}burgerBtn.addEventListener("click",(()=>{burgerBtn.classList.toggle("open"),navMenu.classList.toggle("mobile-menu"),navMenu.classList.toggle("show-menu"),headerTopMobile.classList.toggle("header-mobile")})),itemsList.forEach((e=>{e.addEventListener("click",(t=>{const o=e.querySelector(".sub-menu");o&&o.classList.toggle("active-sub_menu")}))})),itemsListMobile.forEach((e=>{e.addEventListener("click",(t=>{const o=e.querySelector(".sub-menu");o&&o.classList.toggle("active-sub_menu-mobile")}))})),console.log("main");
=======
console.log("footer part");const navMenu=document.getElementById("header-nav-menu"),burgerBtn=document.getElementById("header-menu-btn"),headerTopMobile=document.getElementById("header-mobile"),headerList=document.querySelector(".header__list"),itemsList=headerList.querySelectorAll(".menu-item"),headerListMobile=document.querySelector(".header__list-mobile"),itemsListMobile=headerListMobile.querySelectorAll(".menu-item");function redirectToPage(e){window.location.href=e}burgerBtn.addEventListener("click",(()=>{burgerBtn.classList.toggle("open"),navMenu.classList.toggle("mobile-menu"),navMenu.classList.toggle("show-menu"),headerTopMobile.classList.toggle("header-mobile")})),itemsList.forEach((e=>{e.addEventListener("click",(t=>{const o=e.querySelector(".sub-menu");o&&o.classList.toggle("active-sub_menu")}))})),itemsListMobile.forEach((e=>{e.addEventListener("click",(t=>{const o=e.querySelector(".sub-menu");o&&o.classList.toggle("active-sub_menu-mobile")}))})),console.log("main");
>>>>>>> e7c5b05084ea21efcdacc1a01f8fad76582bf287
