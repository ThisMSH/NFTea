const navBtn = document.getElementsByClassName("nav-link-mod");

for(var i = 0; i < navBtn.length; i++) {
    var temp = navBtn[i];
    temp.addEventListener("mouseover", hoverBtn);
}

function hoverBtn(evt) {
    var temp = evt.target
    const x = evt.pageX - temp.offsetLeft;
    const y = evt.pageY - temp.offsetTop;

    temp.style.setProperty("--x", x + "px");
    temp.style.setProperty("--y", y + "px");
}
// Scroll to Top
let mybutton = document.getElementById("ScrollTop");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
// Adding "info-on" class on user button

const toggleUserInfo = document.querySelector(".user-header");
const infoUser = document.querySelector(".user-info")

toggleUserInfo.onclick = function () {
  infoUser.classList.toggle("info-on");
}
