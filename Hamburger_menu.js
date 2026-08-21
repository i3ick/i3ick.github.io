
function humburgerFunc() {
  var x = document.getElementById("TopNav");
  if (x.className === "nav expand") {
    x.className += " responsive";
  } else {
    x.className = "nav expand";
  }
} 
