let stickyElement = document.querySelector(".sticky-element");
let offsetStickyElement = stickyElement.offsetTop;

let mainWrapper = document.querySelector(".main_wrapper");
let heroComponent = document.getElementById("hero_component");

let heroComponentHeight = heroComponent.offsetHeight;
let mainWrapperOffset = heroComponent.offsetTop + heroComponentHeight;

let sidebarWrapper = document.querySelector(".sidebar_wrapper");
let postSection = document.getElementById("post_section");

let sidebarWrapperHeight = sidebarWrapper.offsetHeight;
let postSectionOffset = postSection.offsetTop + sidebarWrapperHeight - 300;

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

function sidebarStickyElement() {
    console.log(window.pageYOffset);
    console.log(postSectionOffset);
    if (window.pageYOffset >= postSectionOffset) {
        console.log("sidbear sticky");
        sidebarWrapper.classList.add("sidebar-sticky");
    } else {
        console.log("sidbear unsticky");
        sidebarWrapper.classList.remove("sidebar-sticky");
    }
}

window.onscroll = function () {
    addStickyElement();
    changeNavbarColor();
    sidebarStickyElement();
};
