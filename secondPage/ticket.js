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