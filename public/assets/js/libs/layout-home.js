let stickyElement = document.querySelector(".sticky-element");
let offsetStickyElement = stickyElement.offsetTop;

let mainWrapper = document.querySelector(".main_wrapper");
let heroComponent = document.getElementById("hero_component");

let heroComponentHeight = heroComponent.offsetHeight;
let mainWrapperOffset = heroComponent.offsetTop + heroComponentHeight;

function addStickyElement() {
    if (window.pageYOffset >= offsetStickyElement) {
        stickyElement.classList.add("sticky");
    } else {
        stickyElement.classList.remove("sticky");
    }
}

function changeNavbarColor() {
    let navbar = document.querySelector(".navbar");
    if (window.pageYOffset >= mainWrapperOffset) {
        navbar.classList.remove("bg-warning");
        navbar.classList.add("sticky-background");
    } else {
        navbar.classList.remove("sticky-background");
        navbar.classList.add("bg-warning");
    }
}

window.onscroll = function () {
    addStickyElement();
    changeNavbarColor();
};
