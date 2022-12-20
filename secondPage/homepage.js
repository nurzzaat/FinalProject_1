function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementsByClassName("section")[0].style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0, 0, 0, 0.9)";
    document.getElementsByClassName("text_title")[0].style.color = "white";
    document.getElementsByClassName("text_reklame")[0].style.color = "white";
    document.getElementsByTagName("header")[0].style.backgroundColor = "rgba(0, 0, 0, 0.1)";

  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "1%";
    document.body.style.backgroundColor = "white";
    document.getElementsByClassName("text_title")[0].style.color = "black";
    document.getElementsByClassName("text_reklame")[0].style.color = "black";
    document.getElementById("mySidenav").style.width = "0";
    document.getElementsByClassName("section")[0].style.marginLeft = "1%";
    document.getElementsByTagName("header")[0].style.backgroundColor = "white";
  }

  
  let slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }

function checkUser() {
  document.getElementById('curr_user').innerHTML = sessionStorage.getItem('curr_user');
}