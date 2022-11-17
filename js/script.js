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

