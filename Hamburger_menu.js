
function humburgerFunc() {
  var x = document.getElementById("TopNav");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
} 
