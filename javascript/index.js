//adding event listners to the window object
window.addEventListener("load", calc);

//this function calculatyes and apllies a height to the sidebar object
function calc() {
  //calculating the height of the sidebar
  let header_height = document.querySelector(".shadow").offsetHeight;
  let siderbar_height = window.innerHeight - header_height;

  //applying calculated height to the sidebar
  document.styleSheets[2].cssRules[10].style.height = siderbar_height + "px";
}

$(".custom-css-hamburger").click(toogleMenu);
$(".custom-css-close").click(toogleMenu);

function toogleMenu() {
  $(".custom-css-hamburger").toggleClass("custom-css-hamburger-off");
  $(".custom-css-close").toggleClass("custom-css-close-on");
  if ($(".custom-css-close").hasClass("custom-css-close-on")) {
    document.querySelector(".custom-css-close-wrapper").style.zIndex = 1100;
    document.querySelector(".custom-css-hamburger").style.zIndex = 900;
    document.querySelector(".custom-css-sidebar").style.zIndex = 1000;
    document.querySelector(
      ".custom-css-post-preview-section "
    ).style.zIndex = 900;
  } else {
    document.querySelector(".custom-css-close-wrapper").style.zIndex = 900;
    document.querySelector(".custom-css-hamburger").style.zIndex = 1000;
    document.querySelector(".custom-css-sidebar").style.zIndex = 900;
    document.querySelector(
      ".custom-css-post-preview-section "
    ).style.zIndex = 1000;
  }
  $(".custom-css-sidebar").toggleClass("custom-css-sidebar-on");
}
