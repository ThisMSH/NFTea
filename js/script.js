const navBtn = document.querySelector(".nav-link-mod");

console.log(navBtn)
navBtn.onmousemove = function(evt) {
    const x = evt.pageX - navBtn.offsetLeft;
    const y = evt.pageY - navBtn.offsetTop;

    navBtn.style.setProperty("--x", x + "px");
    navBtn.style.setProperty("--y", y + "px");
    console.log(x)
    console.log(y)
}
