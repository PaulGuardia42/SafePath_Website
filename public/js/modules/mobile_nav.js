
export function mobileNav(){
    let menuButton = document.querySelector(".navbar-menu__button");
    

    menuButton.addEventListener("click", () => {
        
        if (menuButton.classList.contains("active")) {
            menuButton.classList.remove('active');
            document.body.style.overflow = "";
        } else {
            menuButton.classList.add('active');
            document.body.style.overflow = "hidden";
        }
    })
}