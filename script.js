const Menu_Icon = document.querySelector(".Menu_Icon");
const Pages = document.querySelector(".Pages");
const Social_Media_Link = document.querySelector(".Social_Media_Link");

let a = 0;
function Menu_Icon_Popup() {
        if (a % 2 == 0) {
            Pages.style.display = "flex";
            Social_Media_Link.style.display = "flex";
        } else {
            Pages.style.display = "none";
            Social_Media_Link.style.display = "none";
        }
        a++;
    
}
Menu_Icon.onclick = Menu_Icon_Popup;



function handleScreenResize(event) {
    if (event.matches) {
        Pages.style.display = "none";
        Social_Media_Link.style.display = "none";     
    } else {
        Pages.style.display = "flex";
        Social_Media_Link.style.display = "flex";
    }
}

let mediaQuery = window.matchMedia("(max-width: 768px)");
mediaQuery.addEventListener("change", handleScreenResize);
handleScreenResize(mediaQuery);
