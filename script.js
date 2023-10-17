//Hamburger menu
const nav = document.querySelector('.navbar-collapse')

document.addEventListener('click',()=>{
    if (nav.classList.contains('show')){
        nav.classList.remove('show')
    }
})

//Size changing navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("logo-img").style.width = "50px";
  } else {
    document.getElementById("logo-img").style.width = "140px";
  }
}



