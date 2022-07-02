// add class navbarDark on navbar scroll
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("navbarDark", window.scrollY > 0);
})
// homepage background video speed reduction
const video = document.querySelector("video");
video.playbackRate = 0.5;
// contact form


  