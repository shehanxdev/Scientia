//adding event listners to the window object
window.addEventListener("load", calc);

//this function calculatyes and apllies a height to the sidebar object
function calc() {
  //calculating the height of the sidebar
  let header_height = document.querySelector(".shadow").offsetHeight;
  let siderbar_height = window.innerHeight - header_height;
  //applying calculated height to the sidebar
  document.styleSheets[2].cssRules[2].style.height = siderbar_height + "px";
}
